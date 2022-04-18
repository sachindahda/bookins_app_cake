<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddServiceTypeToBookings extends AbstractMigration
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
        $table->addColumn('service_type', 'string', [
            'default' => 'office_phone',
            'limit' => 255,
            'null' => false,
        ]);
        $table->update();
    }
}
