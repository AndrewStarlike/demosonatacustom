<?php

namespace AStar\DemoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class WineryAdmin extends Admin
{

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('id')
                ->add('name')
                ->add('description')
                ->add('fax')
                ->add('phone')
                ->add('region')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->add('id')
                ->add('name', null, array('editable' => true))
                ->add('description', null, array('editable' => true))
                ->add('fax', null, array('editable' => true))
                ->add('phone', null, array('editable' => true))
                ->add('region')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        'delete' => array(),
                    )
                ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('name')
                ->add('description')
                ->add('fax')
                ->add('phone')
                ->add('region')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
                ->add('id')
                ->add('name', null, array('editable' => true))
                ->add('description', null, array('editable' => true))
                ->add('fax', null, array('editable' => true))
                ->add('phone', null, array('editable' => true))
                ->add('region')
        ;
    }

}
