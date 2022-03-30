<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Mailer\Mailer;

/**
 * Bookings Controller
 *
 * @property \App\Model\Table\BookingsTable $Bookings
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BookingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('admin_dashboard');

        $bookings = $this->paginate($this->Bookings->find('all', [
            'order' => ['Bookings.created' => 'desc']
        ]));

        $this->set(compact('bookings'));
    }

    public function calendar()
    {
        $this->viewBuilder()->setLayout('admin_dashboard');
            }

     public function calendarBookings()
    {
        $this->autoRender=False;       
        $query=$this->Bookings->find('all', [
             'order' => ['Bookings.created' => 'desc']
         ]);
        $query->enableHydration(false); // Results as arrays instead of entities
        $bookings=$query->all();
        // pr($bookings);die;
        $events = array();
        
        if(!empty($bookings)){
            foreach($bookings as $single){
              $single_event=[];
              $single_event['allDay'] = false;
              $single_event['start'] = $single['scheduled_at'];
              $single_event['end'] = $single['schedule_ends_at'];
              $single_event['title'] = substr($single['description'],0,7);
              $single_event['id']= $single['id'];
              $single_event['url']= '/admin/bookings/view/'.$single['id'];
              $events[] = $single_event;  
            }
        }
        echo json_encode($events);
        die;
    }

    /**
     * View method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('admin_dashboard');

        $booking = $this->Bookings->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('booking'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booking = $this->Bookings->newEmptyEntity();
        if ($this->request->is('post')) {
            $booking = $this->Bookings->patchEntity($booking, $this->request->getData());
            if ($this->Bookings->save($booking)) {
                $this->Flash->success(__('The booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking could not be saved. Please, try again.'));
        }
        $this->set(compact('booking'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->request->allowMethod(['post']);
        $booking = $this->Bookings->get($id);
        $booking->status = 'active';
        if ($this->Bookings->save($booking)) {
            
            $mailer = new Mailer();
            $mailer->setTransport('gmail');
            $mailer
                    ->setEmailFormat('html')
                    ->setTo($booking->email)
                    ->setFrom('app@bestbusinessdeals.com')
                    ->setViewVars(['booking' => $booking])
                    // ->setSubject(sprintf('Hello %s', $booking->name))
                    ->setSubject('Booking Confirmed')
                    ->viewBuilder()
                    ->setTemplate('booking_confirmed')
                                ->setLayout('bookings')
                                ;

                $mail_output=$mailer->deliver();
                $this->Flash->success(__('The booking has been confirmed.and an email has been sent to user regarding the same.'));
        } else {
            $this->Flash->error(__('The booking could not be confirmed. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);


    }

    /**
     * Delete method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booking = $this->Bookings->get($id);
        if ($this->Bookings->delete($booking)) {
            $this->Flash->success(__('The booking has been deleted.'));
        } else {
            $this->Flash->error(__('The booking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
