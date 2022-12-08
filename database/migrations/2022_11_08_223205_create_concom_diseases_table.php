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

            $table->boolean('clinicIschHeartDis'); // наличие клиники ишемической болезни сердца?
            $table->boolean('acuteMyocardilInfarctionBool'); //количество острых инфарктов миокарда в анамнезе
            $table->integer('acuteMyocardilInfarctionNum'); //количество острых инфарктов миокарда в анамнезе
            $table->boolean('currentMyocardilInfarction'); //текущий инфаркт миокарда
            $table->boolean('diabetes'); // наличие сахарного диабета
            $table->string('diabetesType'); // тип сахарного диабета
            $table->boolean('cerebrovascularDisease');  //наличие цереброваскулярной болезни
            $table->boolean('BCAStenosis');  //гемодинамические значимые стенозы БЦА
            $table->boolean('translschAttack'); // транзисторная ишемическая атака
            $table->boolean('ACVA'); // ОНМК в анамнезе
            $table->boolean('chronicLungDisease'); // наличие хронических заболеваний легких
            $table->boolean('prevInfectiousDisease'); // наличие инфекционных заболеваний перенесенных ранее
            $table->boolean('rhythmConcluctionDisturbances'); // наличие нарушений ритма и проводимости
            $table->boolean('thyroidDisease'); // наличие заболеваний щитовидной железы
            $table->boolean('acuteRenalFailure'); // наличие острой почечной недостаточности
            $table->boolean('chronicRenalFailure'); // наличие хранической почечной недостаточности
            $table->boolean('oncology'); // наличие онкологических заболеваний
            $table->boolean('hematologicalDisease');  // наличие гематологических заболеваний
            $table->boolean('pulmonaryEmbolism'); // ТЭЛА
            $table->boolean('chestWallInjury'); // травма грудной клетки
            $table->string('aorticValve'); // вродленный двустворчатый или нормальный аортальный клапан
            $table->boolean('acquiredAVDisease'); // приобретенные пороки аортального клапана
            $table->boolean('AVDegenerativeLesions');  // дегенеративные поражения аортального клапана
            $table->boolean('AVInfectiousLesions'); // инфекционные поражения аортального клапана
            $table->boolean('AVWTraumaticLesionsb'); // травматические поражения сосудистой стенки аорты

            $table->integer('user_id');
            $table->integer('version');
            $table->date('date');
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
