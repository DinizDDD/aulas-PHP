<?php include 'views/header.php'; ?>

<h2 class="mb-4">Lista de Alunos</h2>

<a href="index.php?form=true" class="btn btn-primary mb-3">Cadastrar Aluno</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Matrícula</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alunos as $a): ?>
        <tr>
            <td><?= $a['nome'] ?></td>
            <td><?= $a['idade'] ?></td>
            <td><?= $a['matricula'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'views/footer.php'; ?>
