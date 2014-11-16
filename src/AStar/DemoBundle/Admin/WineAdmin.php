<?php

namespace AStar\DemoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class WineAdmin extends Admin
{

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('id')
                ->add('type')
                ->add('name')
                ->add('description')
                ->add('year')
                ->add('winery')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->add('id')
                ->add('type', null, array('editable' => true))
                ->add('name', null, array('editable' => true))
                ->add('description', null, array('editable' => true))
                ->add('year', null, array('editable' => true))
                ->add('winery')
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
                ->add('type')
                ->add('name')
                ->add('description')
                ->add('year')
                ->add('winery')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
                ->add('id')
                ->add('type', null, array('editable' => true))
                ->add('name', null, array('editable' => true))
                ->add('description', null, array('editable' => true))
                ->add('year', null, array('editable' => true))
                ->add('winery')
        ;
    }

}
