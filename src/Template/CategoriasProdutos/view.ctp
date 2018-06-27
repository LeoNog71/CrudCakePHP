<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto $categoriasProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categorias Produto'), ['action' => 'edit', $categoriasProduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categorias Produto'), ['action' => 'delete', $categoriasProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasProduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorias Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorias Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoriasProdutos view large-9 medium-8 columns content">
    <h3><?= h($categoriasProduto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Categoria') ?></th>
            <td><?= h($categoriasProduto->nome_categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoriasProduto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($categoriasProduto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($categoriasProduto->modificado) ?></td>
        </tr>
    </table>
</div>
