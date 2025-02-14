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
        Schema::create('cusc_loai', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('l_ma')->autoIncrement()->comment('Mã loại sản phẩm');
            $table->string('l_ten', 50)->comment('Tên loại # Tên loại sản phẩm');
            $table->timestamp('l_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo loại sản phẩm');
            $table->timestamp('l_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật loại sản phẩm gần nhất');
            $table->tinyInteger('l_trangThai')->default('2')->comment('Trạng thái # Trạng thái loại sản phẩm: 1-khóa, 2-khả dụng');
            
            $table->unique(['l_ten']);
        });
        DB::statement("ALTER TABLE `cusc_loai` comment 'Loại thiết bị # Loại thiết bị'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_loai');
    }
};
