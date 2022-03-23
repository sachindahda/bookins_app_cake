<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddBookingDurationToBookingsTable extends AbstractMigration
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
        $table->addColumn('booking_duration', 'string', [
            'default' => '00',
            'limit' => 255,
            'null' => false,
        ]);
        $table->update();
    }
}
