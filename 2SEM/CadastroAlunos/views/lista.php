<?php include 'views/header.php'; ?>

<h2 class="mb-4">Lista de Alunos</h2>

<a href="index.php?form=true" class="btn btn-primary mb-3">Cadastrar Aluno</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Matrícula</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alunos as $a): ?>
        <tr>
            <td><?= $a['nome'] ?></td>
            <td><?= $a['idade'] ?></td>
            <td><?= $a['matricula'] ?></td>
            <td>
                <a href="index.php?editar=<?= $a['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                <a href="index.php?excluir=<?= $a['id'] ?>" class="btn btn-danger btn-sm"
                   onclick="return confirm('Excluir aluno?');">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php include 'views/footer.php'; ?>
