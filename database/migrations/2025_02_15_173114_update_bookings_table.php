<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Khóa chính booking_id
            $table->string('customer_name'); // Tên khách hàng
            $table->string('customer_email')->nullable(); // Email khách hàng
            $table->string('customer_phone'); // Số điện thoại khách hàng
            $table->string('pickup_location'); // Điểm đi
            $table->string('dropoff_location'); // Điểm đến
            $table->date('departure_date'); // Ngày đi
            $table->date('return_date')->nullable(); // Ngày về (có thể null nếu đi 1 chiều)
            $table->text('requirements')->nullable(); // Nhu cầu khách hàng
            $table->text('notes')->nullable(); // Ghi chú
            $table->enum('status', ['pending', 'confirmed', 'canceled'])->default('pending'); // Trạng thái đơn đặt xe
            $table->timestamps(); // Tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
};
