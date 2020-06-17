<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>



<?php $form = ActiveForm::begin([]); ?>

    <div class="row" style="padding:80px 100px 100px 100px">

<h1 style="text-align: center">Enter new static word for both languages</h1>
        <?php for($k=0;$k<1;$k++) : ?>
        <?php $room = $rooms[$k]; ?>
        <input type="hidden" name="Room[<?= $k ?>][id]" value="<?= $room->id ?>" />
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Message ID</label>
                    <input type="text" class="form-control"
                           name="Room[<?= $k ?>][description][msg]"
                           placeholder="Enter message ID (ed: greeting)">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Message Czech</label>
                    <input type="text" class="form-control"
                           name="Room[<?= $k ?>][description][cz]"
                           placeholder="Enter czech word (ed: ahoj)">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Message English</label>
                    <input type="text" class="form-control"
                           name="Room[<?= $k ?>][description][en]"
                           placeholder="Enter english word (ed: hello)">

                </div>
            </div>
        <?php endfor; ?>
            <button type="submit" class="btn btn-primary">Submit</button>

        <?php ActiveForm::end(); ?>
        </div>



<style>
    #wrap-header {
    position: absolute !important;
    }

</style>
