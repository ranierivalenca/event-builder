<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->assign('title', 'ENTEC 2017 - Lista Artigos'); ?>
<div class="container section"
    style="width: 70%; margin-bottom: 10px;" id="insc">
    <?= $this->Flash->render()?>
    <h2>Meus artigos:</h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" style="width:5%;">ID</th>
                <th scope="col">Título</th>
                <th scope="col" style="width:20%;">Status</th>
                <th scope="col" style="width:20%;">Data Envio</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($papers as $paper): ?>
            <tr>
                <td><?= $this->Number->format($paper->id) ?></td>                
                <td><?= h($paper->title) ?></td>
                <td><?= h($paper->status==='pending'?'Pendente de Avaliação':$paper->status) ?></td>
                <td><?= h($paper->created->format('d/m/Y - H:i:s')) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
