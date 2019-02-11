<form class="" action="/" method="get">
    <div class="control-group"><br>
        <input type="text" class="input-block-level" name="q" value="<?php
        if(isset($q)){
            e($q);
        }
        ?>" id="q" placeholder="Buscar nesta tabela">
    </div>
</form>
