<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaga $vaga
 * @var \Cake\Collection\CollectionInterface|string[] $departamentos
 * @var \Cake\Collection\CollectionInterface|string[] $empresas
 * @var \Cake\Collection\CollectionInterface|string[] $estabelecimentosEmpresas
 * @var \Cake\Collection\CollectionInterface|string[] $setores
 */
?>
<div class="row">
    <aside class="column" >
    
    <div class="side-nav" style="background-color: white; border-radius: 15px; width:260px; height: 150px;">      <div>
        
        <h4 class="heading" style="margin-left: 15px;"><?= __('Adicionar') ?> </h4>    
            <div class="container">
                <a href="http://localhost/vagascake/departamentos/add">Departamento</a> <br>
                <a href="http://localhost/vagascake/departamentos/add">Empresa</a> <br>
                <a href="http://localhost/vagascake/estabelecimentos-empresas/add"> Estabelecimentos Empresa   </a>
            </div>  
            
            </div>
        </div>
        <div style="text-align:center;  background-color:#8BD3DE ;margin-left: 200px; margin-top:10px;border-radius: 10px; backgroud-color:white">
            <?= $this->Html->link(__('voltar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?> 
        </div> 
    </aside>
    <div class="column-responsive column-75">
        <div class="vagas form content">
            <?= $this->Form->create($vaga) ?>
            <fieldset>
                <legend><?= __('Add Vaga') ?></legend>
                <?php
                    echo $this->Form->control('nome_vaga');
                    echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true]);
                    echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
                    echo $this->Form->control('estabelecimentos_empresa_id', ['options' => $estabelecimentosEmpresas, 'empty' => true]);
                    echo $this->Form->control('setor_id', ['options' => $setores, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            
            <?= $this->Form->end() ?>
        </div>
    </div>
    
</div>
 