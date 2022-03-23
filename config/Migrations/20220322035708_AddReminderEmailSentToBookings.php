<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddReminderEmailSentToBookings extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('bookings');
        $table->addColumn('reminder_email_sent', 'string', [
            'default' => 'not_sent',
            'limit' => 255,
            'null' => false,
        ]);
        $table->update();
    }
}
