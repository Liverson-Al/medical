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
        Schema::create('concom_diseases', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');

            $table->boolean('clinicIschHeartDis')->nullable(); // наличие клиники ишемической болезни сердца?
            $table->boolean('acuteMyocardilInfarctionBool')->nullable(); //количество острых инфарктов миокарда в анамнезе
            $table->integer('acuteMyocardilInfarctionNum')->nullable(); //количество острых инфарктов миокарда в анамнезе
            $table->boolean('currentMyocardilInfarction')->nullable(); //текущий инфаркт миокарда
            $table->boolean('diabetes')->nullable(); // наличие сахарного диабета
            $table->string('diabetesType')->nullable(); // тип сахарного диабета
            $table->boolean('cerebrovascularDisease')->nullable();  //наличие цереброваскулярной болезни
            $table->boolean('BCAStenosis')->nullable();  //гемодинамические значимые стенозы БЦА
            $table->boolean('translschAttack')->nullable(); // транзисторная ишемическая атака
            $table->boolean('ACVA')->nullable(); // ОНМК в анамнезе
            $table->boolean('chronicLungDisease')->nullable(); // наличие хронических заболеваний легких
            $table->boolean('prevInfectiousDisease')->nullable(); // наличие инфекционных заболеваний перенесенных ранее
            $table->boolean('rhythmConcluctionDisturbances')->nullable(); // наличие нарушений ритма и проводимости
            $table->boolean('thyroidDisease')->nullable(); // наличие заболеваний щитовидной железы
            $table->boolean('acuteRenalFailure')->nullable(); // наличие острой почечной недостаточности
            $table->boolean('chronicRenalFailure')->nullable(); // наличие хранической почечной недостаточности
            $table->boolean('oncology')->nullable(); // наличие онкологических заболеваний
            $table->boolean('hematologicalDisease')->nullable();  // наличие гематологических заболеваний
            $table->boolean('pulmonaryEmbolism')->nullable(); // ТЭЛА
            $table->boolean('chestWallInjury')->nullable(); // травма грудной клетки
            $table->string('aorticValve')->nullable(); // вродленный двустворчатый или нормальный аортальный клапан
            $table->boolean('acquiredAVDisease')->nullable(); // приобретенные пороки аортального клапана
            $table->boolean('AVDegenerativeLesions')->nullable();  // дегенеративные поражения аортального клапана
            $table->boolean('AVInfectiousLesions')->nullable(); // инфекционные поражения аортального клапана
            $table->boolean('AVWTraumaticLesionsb')->nullable(); // травматические поражения сосудистой стенки аорты

            $table->integer('user_id')->nullable();
            $table->integer('version')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concom_diseases');
    }
};
