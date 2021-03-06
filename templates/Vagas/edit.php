<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaga $vaga
 * @var string[]|\Cake\Collection\CollectionInterface $departamentos
 * @var string[]|\Cake\Collection\CollectionInterface $empresas
 * @var string[]|\Cake\Collection\CollectionInterface $estabelecimentosEmpresas
 * @var string[]|\Cake\Collection\CollectionInterface $setores
 */
?>

    

<div class="row">

    <aside class="column">
        
        <div class="side-nav" style="background-color: white; border-radius: 15px; width:260px; height: 150px;">
        <div class="container" >
            <h4 class="heading" ><?= __('Actions') ?></h4>
                         <?= $this->Form->postLink(
                         __('Deletar'),
                             ['action' => 'delete', $vaga->id],
                             ['confirm' => __('Are you sure you want to delete # {0}?', $vaga->id), 'class' => 'side-nav-item']
                        ) ?>
             </div>
        </div>
        <div style="text-align:center;  background-color:#8BD3DE ;margin-left: 200px; margin-top:10px;border-radius: 10px; backgroud-color:white">
            <?= $this->Html->link(__('voltar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?> 
        </div> 
    </aside>
    
    <div class="column-responsive column-80">
        <div class="vagas form content">
            <?= $this->Form->create($vaga) ?>
            <fieldset>
                <legend><?= __('Edit Vaga') ?></legend>
                <?php
                    echo $this->Form->control('nome_vaga');
                    echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true]);
                    echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
                    echo $this->Form->control('estabelecimentos_empresa_id', ['options' => $estabelecimentosEmpresas, 'empty' => true]);
                    echo $this->Form->control('setore_id', ['options' => $setores, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
