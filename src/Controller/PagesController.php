<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\Mailer\Mailer;


/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    public function index(){
        // $this->viewBuilder()->setLayout('pages');
        $this->viewBuilder()->setLayout('frontend');

    }

    public function bookAppointment(){
        // $this->viewBuilder()->setLayout('frontend_booking');
        $this->viewBuilder()->setLayout('frontend_booking_new');
        $bookingsTable = $this->getTableLocator()->get('Bookings');
        $booking = $bookingsTable->newEmptyEntity();
        if($this->request->is('post')) {
            $booking = $bookingsTable->patchEntity($booking, $this->request->getData());
            // pr($booking);die;

            if($booking->getErrors()) {
                $this->Flash->error(__('Unable to Save Appointment Details.  Please make sure you have filled all fields correctly.'));
            }else {
                $bookingsTable->save($booking);
                $this->Flash->success(__('Your Appointment Details have been saved and an email has been sent to you regarding the same.You will be notified via mail Once Approved '));

                $mailer = new Mailer();
                $mailer->setTransport('gmail');

                $mailer
                            ->setEmailFormat('html')
                            ->setTo($booking->email)
                            ->setFrom('app@bestbusinessdeals.com')
                            ->setViewVars(['booking' => $booking])
                            // ->setSubject(sprintf('Hello %s', $booking->name))
                            ->setSubject('Booking Saved')
                            ->viewBuilder()
                                ->setTemplate('booking_saved')
                                // ->setLayout('bookings_saved')
                                ;

                $mail_output=$mailer->deliver();
                // pr($mail_output);die;

                return  $this->redirect([
                'controller' => 'Pages',
                'action' => 'bookAppointment',
            ]);
           }

       }
        $this->set(compact('booking'));


    }

}
