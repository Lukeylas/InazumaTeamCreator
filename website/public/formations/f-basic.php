<div id="formation" class="d-flex align-items-end">
    <div class="container mb-4">
        <div class="row" id="row6">
            <div class="col d-flex justify-content-end align-items-end">10 <?php if(isset($players[10])) echo $players[10]->firstname." ".$players[10]->lastname; ?></div>
            <div class="col d-flex justify-content-start align-items-end">11 <?php if(isset($players[11])) echo $players[11]->firstname." ".$players[11]->lastname; ?></div>
        </div>
        <div class="row" id="row5">
            <div class="col d-flex justify-content-center align-items-end">6 <?php if(isset($players[6])) echo $players[6]->firstname." ".$players[6]->lastname; ?></div>
            <div class="col d-flex justify-content-center align-items-end">9 <?php if(isset($players[9])) echo $players[9]->firstname." ".$players[9]->lastname; ?></div>
        </div>
        <div class="row" id="row4">
            <div class="col d-flex justify-content-end align-items-end">7 <?php if(isset($players[7])) echo $players[7]->firstname." ".$players[7]->lastname; ?></div>
            <div class="col d-flex justify-content-start align-items-end">8 <?php if(isset($players[8])) echo $players[8]->firstname." ".$players[8]->lastname; ?></div>
        </div>
        <div class="row" id="row3">
            <div class="col d-flex justify-content-center align-items-end">2 <?php if(isset($players[2])) echo $players[2]->firstname." ".$players[2]->lastname; ?></div>
            <div class="col d-flex justify-content-center align-items-end">5 <?php if(isset($players[5])) echo $players[5]->firstname." ".$players[5]->lastname; ?></div>
        </div>
        <div class="row" id="row2">
            <div class="col d-flex justify-content-end align-items-end">3 <?php if(isset($players[3])) echo $players[3]->firstname." ".$players[3]->lastname; ?></div>
            <div class="col d-flex justify-content-start align-items-end">4 <?php if(isset($players[4])) echo $players[4]->firstname." ".$players[4]->lastname; ?></div>
        </div>
        <div class="row" id="row1">
            <div class="col d-flex justify-content-center align-items-end">1 <?php if(isset($players[1])) echo $players[1]->firstname." ".$players[1]->lastname; ?> </div>
        </div>
    </div>
</div>

<style scoped>
    #formation {
        width: 35vw;
        height: 85vh;
        border: black solid 1px;
        float: left;
    }
    .row {
        height: 15%;
    }
</style>