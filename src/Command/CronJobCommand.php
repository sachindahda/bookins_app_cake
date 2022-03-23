<?php
declare(strict_types=1);

namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\Mailer\Mailer;

/**
 * CronJob command.
 */
class CronJobCommand extends Command
{

    public $modelClass = "Bookings";
    /**
     * Hook method for defining this command's option parser.
     *
     * @see https://book.cakephp.org/4/en/console-commands/commands.html#defining-arguments-and-options
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser = parent::buildOptionParser($parser);

        return $parser;
    }

    /**
     * Implement this method with your command's logic.
     *
     * @param \Cake\Console\Arguments $args The command arguments.
     * @param \Cake\Console\ConsoleIo $io The console io
     * @return null|void|int The exit code or null for success
     */
    public function execute(Arguments $args, ConsoleIo $io)
    {
        $bookings_table = $this->getTableLocator()->get('Bookings');

        $query = $bookings_table->find()
        ->where([
            'scheduled_at >= NOW() AND scheduled_at <= NOW() + INTERVAL 2 DAY','status'=>'active','reminder_email_sent'=>'not_sent'
        ]);
        $bookings=$query->all();
        $io->out(print_r($bookings, true));
        if (!empty($bookings)){
            foreach ($bookings as $booking){
                $mailer = new Mailer();
                $mailer->setTransport('gmail');
                $mailer
                    ->setEmailFormat('html')
                    ->setTo($booking->email)
                    ->setFrom('app@bestbusinessdeals.com')
                    ->setViewVars(['booking' => $booking])
                    ->setSubject('Booking Reminder')
                    ->viewBuilder()
                    ->setTemplate('booking_reminder')
                                ->setLayout('bookings')
                                ;

                $mailer->deliver();
                $booking->reminder_email_sent = 'sent';
                $bookings_table->save($booking);
                $io->out('Reminder Mail Sent and reminder status updated in DB for record '.$booking->id);

        
                
            }
        }

    }
}
