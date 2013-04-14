<h1>Turnos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Dia</th>
      <th>Mes</th>
      <th>Comuna</th>
      <th>Farmacia</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($turnos as $turno): ?>
    <tr>
      <td><a href="<?php echo url_for('turno/edit?id='.$turno->getId()) ?>"><?php echo $turno->getId() ?></a></td>
      <td><?php echo $turno->getDia() ?></td>
      <td><?php echo $turno->getMes() ?></td>
      <td><?php echo $turno->getComunaId() ?></td>
      <td><?php echo $turno->getFarmaciaId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('turno/new') ?>">New</a>
