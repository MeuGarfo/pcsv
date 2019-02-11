<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php e($t['name']); ?></title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav',$data); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="offset1 span8">
                <h1>
                    <?php e($t['name']); ?>
                </h1>
                <p>
                    Publicado por
                    <?php
                    $link='/user/'.$t['uuid'];
                    print '<a href="'.$link.'">';
                    e($profile['name']);
                    print '</a>';
                    ?>
                </p>
<?php
view('inc/formSearchT');
 ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>A</th>
                            <th>B</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>um</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>dois</td>
                        </tr>
                    </tbody>
                </table>
            </div><!--span8-->
            <div class="span2">
                <h1>Opções</h1>
                <?php
                if(isset($user['uuid']) && $t['uuid']==$user['uuid']){
                    $link='/t/'.$t['uid'].'/update';
                    print '<a href="'.$link.'" class="btn btn-large input-block-level">';
                    print 'Renomear lista';
                    print '</a><br>';
                }
                $link='/t/'.$t['uid'].'/download/'.$t['name'].'.csv';
                print '<a href="'.$link.'" class="btn btn-large input-block-level btn-success">';
                print 'Baixar';
                print '</a>';
                ?>
            </div><!--span2-->
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
