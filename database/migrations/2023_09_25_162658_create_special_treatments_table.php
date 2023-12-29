<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialTreatmentsTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_treatments', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();

            $table->boolean('chemotherapy')->nullable();
            $table->boolean('iv')->nullable();
            $table->boolean('oral')->nullable();
            $table->boolean('rocOther')->nullable();
            $table->boolean('radiation')->nullable();
            $table->boolean('oxygenTherapy')->nullable();
            $table->boolean('continuous')->nullable();
            $table->boolean('intermittent')->nullable();
            $table->boolean('concentration')->nullable();
            $table->boolean('suctioning')->nullable();
            $table->boolean('scheduled')->nullable();
            $table->boolean('needed')->nullable();
            $table->boolean('tracheostomy')->nullable();
            $table->boolean('invasive')->nullable();
            // $table->boolean('invasive')->nullable();
            $table->boolean('nonInvasive')->nullable();
            $table->boolean('bipap')->nullable();
            $table->boolean('cpap')->nullable();
            $table->boolean('medications')->nullable();
            $table->boolean('vasMedications')->nullable();
            $table->boolean('antibiotics')->nullable();
            $table->boolean('anticoagulation')->nullable();
            $table->boolean('Otherh10')->nullable();
            $table->boolean('transfusions')->nullable();
            $table->boolean('dialysis')->nullable();
            $table->boolean('hemodialysis')->nullable();
            $table->boolean('peritonealDialysis')->nullable();
            $table->boolean('otherIvAccess')->nullable();
            $table->boolean('otherPeripheral')->nullable();
            $table->boolean('midLine')->nullable();
            $table->boolean('central')->nullable();
            $table->boolean('noa')->nullable();
            $table->boolean('treatmentsChemotherapy')->nullable();
            $table->boolean('treatmentsIv')->nullable();
            $table->boolean('cancerTreatmentsIral')->nullable();
            $table->boolean('cancerTreatmentsOther')->nullable();
            $table->boolean('cancerTreatmentscRadiation')->nullable();
            $table->boolean('respiratoryOxygen')->nullable();
            $table->boolean('respiratoryContinuous')->nullable();
            $table->boolean('respiratoryIntermittent')->nullable();
            $table->boolean('respiratoryConcentration')->nullable();
            $table->boolean('respiratorySuctioning')->nullable();
            $table->boolean('respiratoryScheduled')->nullable();
            $table->boolean('respiratoryNeeded')->nullable();
            $table->boolean('respiratoryTracheostomy')->nullable();
            $table->boolean('respiratoryInvasive')->nullable();
            $table->boolean('respiratoryNonInvasive')->nullable();
            $table->boolean('respiratoryBipap')->nullable();
            $table->boolean('respiratoryCpap')->nullable();
            $table->boolean('respiratoryIvMedications')->nullable();
            $table->boolean('respiratoryVasoactive')->nullable();
            $table->boolean('respiratoryAntibiotics')->nullable();
            $table->boolean('respiratoryAnticoagulation')->nullable();
            $table->boolean('respiratoryOther')->nullable();
            $table->boolean('respiratoryTransfusions')->nullable();
            $table->boolean('respiratoryDialysis')->nullable();
            $table->boolean('respiratoryHemodialysis')->nullable();
            $table->boolean('respiratoryPeritoneal')->nullable();
            $table->boolean('respiratoryIVAccess')->nullable();
            $table->boolean('respiratoryPeripheral')->nullable();
            $table->boolean('respiratoryMidline')->nullable();
            $table->boolean('respiratoryCentral')->nullable();
            $table->boolean('respiratoryNoa')->nullable();
            $table->integer('includeDates')->nullable();
            $table->boolean('influenzaNo')->nullable();
            $table->boolean('influenzaYes')->nullable();
            $table->boolean('influenzaYesReceived')->nullable();
            $table->boolean('influenzaAssessed')->nullable();
            $table->boolean('influenzaIndicated')->nullable();
            $table->boolean('influenzaInability')->nullable();
            $table->boolean('influenzaNotReceive')->nullable();
            $table->integer('numberOfTherapy')->nullable();
            $table->boolean('notappli')->nullable();
            $table->text('coordinationComment')->nullable();
            $table->text('dmeCompanyName')->nullable();
            $table->text('companyPhn')->nullable();
            $table->text('companyOxygen')->nullable();
            $table->text('companyOxygenPhn')->nullable();

            $table->boolean('communityOrganizations')->nullable();
            $table->boolean('companyServices')->nullable();
            $table->text('comOrgComment')->nullable();
            $table->text('companyComContact')->nullable();
            $table->text('companyComPhn')->nullable();
            $table->text('companyComComment')->nullable();

            $table->boolean('usedWound')->nullable();
            $table->boolean('twointotwo')->nullable();
            $table->boolean('fourintofour')->nullable();
            $table->boolean('abds')->nullable();
            $table->boolean('cottonTipped')->nullable();
            $table->boolean('drainSponges')->nullable();
            $table->boolean('hydrocolloids')->nullable();
            $table->boolean('nuGauze')->nullable();
            $table->boolean('transparentDressings')->nullable();
            $table->boolean('woundCleanser')->nullable();
            $table->boolean('nonusesOther')->nullable();
            $table->text('nonUsedOtherNote')->nullable();
            $table->boolean('alcoholSwabs')->nullable();
            $table->boolean('angiocatheterSize')->nullable();
            $table->text('notessize')->nullable();
            $table->boolean('batteriesSize')->nullable();
            $table->text('batteriesSizeNote')->nullable();
            $table->boolean('centralLineDressing')->nullable();
            $table->boolean('extensionTubings')->nullable();
            $table->boolean('infusionPump')->nullable();
            $table->boolean('injectionCaps')->nullable();
            $table->boolean('ivPole')->nullable();
            $table->boolean('ivTubing')->nullable();
            $table->boolean('syringesSize')->nullable();
            $table->text('syringesSizeNote')->nullable();
            $table->boolean('tape')->nullable();
            $table->boolean('tapeOther')->nullable();
            $table->boolean('externalCatheters')->nullable();
            $table->boolean('ostomyPouch')->nullable();
            $table->text('ostomyPouchNote')->nullable();
            $table->boolean('ostomyWafer')->nullable();
            $table->text('ostomyWaferNote')->nullable();
            $table->boolean('skinProtectant')->nullable();
            $table->boolean('stomaAdhesive')->nullable();
            $table->boolean('underpads')->nullable();
            $table->boolean('pouch')->nullable();
            $table->boolean('pouchOther')->nullable();
            $table->text('pouchNote')->nullable();
            $table->boolean('aceticAcid')->nullable();
            $table->boolean('aceticAcidStatus')->nullable();
            $table->text('aceticAcidNote')->nullable();
            $table->boolean('irrigationTray')->nullable();
            $table->boolean('saline')->nullable();
            $table->boolean('straightCatheter')->nullable();
            $table->boolean('straightCatheterOther')->nullable();
            $table->text('straightCatheterOtherNote')->nullable();
            $table->boolean('chemstrips')->nullable();
            $table->boolean('syringes')->nullable();
            $table->boolean('syringesOther')->nullable();
            $table->text('syringesOtherNote')->nullable();
            $table->boolean('feedingTube')->nullable();
            $table->text('feedingTubeType')->nullable();
            $table->text('feedingTubeTypeSize')->nullable();
            $table->boolean('sterile')->nullable();
            $table->boolean('nonSterile')->nullable();
            $table->boolean('medBox')->nullable();
            $table->boolean('stapleRemoval')->nullable();
            $table->boolean('steriStrips')->nullable();
            $table->boolean('sutureRemovalKit')->nullable();
            $table->boolean('sutureRemovalKitOther')->nullable();
            $table->text('sutureRemovalKitNote')->nullable();
            $table->boolean('augmentative')->nullable();
            $table->text('augmentativeNote')->nullable();
            $table->boolean('bathBench')->nullable();
            $table->boolean('brace')->nullable();
            $table->boolean('orthotics')->nullable();
            $table->text('orthoticsNote')->nullable();
            $table->boolean('cane')->nullable();
            $table->boolean('commode')->nullable();
            $table->boolean('dressing')->nullable();
            $table->boolean('eggcrate')->nullable();
            $table->boolean('enteral')->nullable();
            $table->boolean('grab')->nullable();
            $table->text('grabNote')->nullable();
            $table->boolean('handheldShower')->nullable();
            $table->boolean('hospitalBed')->nullable();
            $table->boolean('semiElectric')->nullable();
            $table->boolean('hoyerLift')->nullable();
            $table->boolean('kneeScooter')->nullable();
            $table->boolean('medicalAlert')->nullable();
            $table->boolean('nebulizer')->nullable();
            $table->boolean('oxygenConcentrator')->nullable();
            $table->boolean('pressureRelieving')->nullable();
            $table->boolean('prosthesis')->nullable();
            $table->boolean('rue')->nullable();
            $table->boolean('rle')->nullable();
            $table->boolean('lue')->nullable();
            $table->boolean('lle')->nullable();
            $table->boolean('other')->nullable();
            $table->text('otherNote')->nullable();
            $table->boolean('raisedToilet')->nullable();
            $table->boolean('reacher')->nullable();
            $table->boolean('specialMattress')->nullable();
            $table->text('specialMattressNote')->nullable();
            $table->boolean('suctionMachine')->nullable();
            $table->boolean('tensUnit')->nullable();
            $table->boolean('transferEquipment')->nullable();
            $table->boolean('board')->nullable();
            $table->boolean('lift')->nullable();
            $table->boolean('ventilator')->nullable();
            $table->boolean('walker')->nullable();
            $table->boolean('wheelchair')->nullable();
            $table->boolean('otherSupplies')->nullable();
            $table->text('otherSuppliesNote')->nullable();
            $table->integer('cth')->nullable();
            $table->boolean('dependentUpon')->nullable();
            $table->boolean('crutches')->nullable();
            $table->boolean('canes')->nullable();
            $table->boolean('dependentWalker')->nullable();
            $table->boolean('wheelchairAdapet')->nullable();
            $table->boolean('manual')->nullable();
            $table->boolean('motorized')->nullable();
            $table->boolean('prostheticLimb')->nullable();
            $table->boolean('scooter')->nullable();
            $table->boolean('ahelper')->nullable();
            // $table->text('dependentOther')->nullable();
            $table->text('dependentOther')->nullable();
            $table->text('specialTransportation')->nullable();
            $table->text('physicalAssist')->nullable();
            $table->text('leavingHome')->nullable();
            $table->boolean('normalInability')->nullable();
            $table->text('leavingHomeRequires')->nullable();
            $table->text('cthNote')->nullable();
            $table->text('nextVisit')->nullable();
            $table->text('visitComments')->nullable();
            $table->boolean('physician')->nullable();
            $table->text('verbalOrder')->nullable();
            $table->text('signature')->nullable();
            $table->date('signatureDate')->nullable();
            $table->time('signatureTime')->nullable();
            $table->text('physicianSignature')->nullable();
            $table->date('physicianSignatureDate')->nullable();
            $table->time('physicianSignatureTime')->nullable();
            $table->text('familyMember')->nullable();
            $table->date('familyMemberDate')->nullable();
            $table->time('familyMemberTime')->nullable();
            $table->text('personCompleting')->nullable();
            $table->date('personCompletingDate')->nullable();
            $table->time('personCompletingTime')->nullable();
            $table->text('agencyName')->nullable();
            $table->text('agencyPhone')->nullable();
            $table->text('discontinued')->nullable();

            $table->integer('modified_by')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('special_treatments');
    }
};
