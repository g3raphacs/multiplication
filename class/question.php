
<?php
class Question
{
    public $randnum = 0;
    public function __construct(int $n){
        $randnum = rand(5,10);
        echo
        '<section class="tableSec txt-main-black">
            <header class="bck-main">
                <h2 class="txt-center f-18 flex"><span class="txt-white quest">Calculez :</span></h2>
            </header>
            <div class="table bck-white">
                <form action="" method="GET">
                    <p class="flexspaceev f-15"><span class="txt-table'.$n.'">'.$n.'</span> x <span>'.$randnum.'</span> = <span class="txt-white bck-table'.$n. '"><input class="rep f-bold f-16 txt-white txt-center bck-table'.$n. '" type="number" placeholder="?" min="0" name="reponse" /></span></p>
                    <input type="hidden" name="result" value="'.($randnum*$n).'" />
                    <div class="flexcenter"><button class="txt-white btn-submit bck-main" type="submit"><img src="media/validate.svg" alt="" width="40"  height="40"></button></div>
                </form>
        </div>
        </section>';
    }
}