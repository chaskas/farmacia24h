<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('turno/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('turno/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'turno/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['dia']->renderLabel() ?></th>
        <td>
          <?php echo $form['dia']->renderError() ?>
          <?php echo $form['dia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['mes']->renderLabel() ?></th>
        <td>
          <?php echo $form['mes']->renderError() ?>
          <?php echo $form['mes'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['comuna_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['comuna_id']->renderError() ?>
          <?php echo $form['comuna_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['farmacia_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['farmacia_id']->renderError() ?>
          <?php echo $form['farmacia_id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
