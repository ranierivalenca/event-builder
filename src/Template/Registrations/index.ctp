<?php
/**
  * @var \App\View\AppView $this
  */
?>

<!-- src/Template/Users/index.ctp -->
<?= $this->assign('title', 'Confirmar Inscrição'); ?>

<div class="container" style="padding-top: 89px; margin-bottom: 10px; ">
<?= $this->Flash->render()?>
<?= $this->Flash->render('auth') ?>

<h2>Inscritos <small> Total válidas: <?= $count ?></small></h2> 
<div  class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1" style="padding: 0;">

    

        

    <table style="width: 100%;"> 
        <col style="width: 5% ;"/>
        <col style="width: 40% ;"/>
        <col style="width: 17% ;"/>
        <col style="width: 9% ;"/>
        <col style="width: 10% ;"/>
        <col style="width: 10% ;"/>
        <col style="width: 10% ;"/>
        <tr>
            <th>Nº</th>
            <th>Nome</th>
            <th>Papel</th>
            <th>Ações</th>
            <th style="text-align:center;">Status</th>
            <th style="text-align:center;">Credenciado</th>
        </tr>
        <tbody style="width: 100%;">
        <?php foreach ($registrations as $registration): ?>
            
            <tr style="border: 1px solid #ddd;">
                <td><?= $registration->user->id ?></td>
                <td><?= $registration->user->nome ?></td>               
                <td > 
                <?= $this->Html->link($registration->role.'<i class="fa fa-pencil"></i>', ['action' => 'editRole', $registration->event_id,  $registration->user_id], ['escape' => false]) ?> 
                </td>
                  
                <td> 

                
                <td style="text-align:center;">
                    <div  style="<?php echo $registration->user->ativo ? 'background-color:#b3ffb3;':'background-color:#ddd;';?>  width: 40px; height: 40px; line-height: 40px; margin:auto; border: 0px; border-radius: 6px;font-size: 1.5em; text-align:center;">
                    <?=$this->Form->postLink ('<i class="fa fa-check"></i>' , array ('action' => 'validar',$registration->user->id ), array ('style'=> $registration->user->ativo ? 'color:#555;':'color:#999;' ,'escape' => false,'confirm' => __ ( 'Validar ' . $registration->user->nome . ' ?' ) ) );?>
                    </div>
                </td>
                <td style="text-align:center;">
                    <div  style="<?php echo $registration->checkin ? 'background-color:#b3ffb3;':'background-color:#ddd;';?>  width: 40px; height: 40px; line-height: 40px; margin:auto; border: 0px; border-radius: 6px;font-size: 1.5em; text-align:center;">
                    <?=$this->Form->postLink ('<i class="fa   fa-flag-checkered"></i>' , array ('action' => 'credenciar',$registration->id ), array ('style'=> $registration->checkin ? 'color:#555;':'color:#999;','escape' => false,'confirm' => __ ( 'Credenciar ' . $registration->user->nome . ' ?' ) ) );?>
                    </div>
                </td>
                
            </tr>
            <?php endforeach; ?>
            </tbody>
    
    </table>

</div>
</div>