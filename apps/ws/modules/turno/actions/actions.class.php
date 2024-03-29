<?php

/**
 * turno actions.
 *
 * @package    farmacia24h
 * @subpackage turno
 * @author     Rodrigo Campos H. rodrigo [at] webdevel [dot] cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class turnoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->turnos = Doctrine_Core::getTable('Turno')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TurnoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TurnoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($turno = Doctrine_Core::getTable('Turno')->find(array($request->getParameter('id'))), sprintf('Object turno does not exist (%s).', $request->getParameter('id')));
    $this->form = new TurnoForm($turno);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($turno = Doctrine_Core::getTable('Turno')->find(array($request->getParameter('id'))), sprintf('Object turno does not exist (%s).', $request->getParameter('id')));
    $this->form = new TurnoForm($turno);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($turno = Doctrine_Core::getTable('Turno')->find(array($request->getParameter('id'))), sprintf('Object turno does not exist (%s).', $request->getParameter('id')));
    $turno->delete();

    $this->redirect('turno/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $turno = $form->save();

      $this->redirect('turno/edit?id='.$turno->getId());
    }
  }
}
