<?php
namespace Weo\BancoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CategoriaApunteAdmin extends Admin
{
    public function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nombre', 'text', array ())
            ->add('apuntes', 'orm_one_to_many', array ())
        ;
    }

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombre', NULL, array (), array ())
            ->add('apuntes', NULL, array (), array ())
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre', 'text', array ())
            ->add('apuntes', 'orm_one_to_many', array ())
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'nombre',))
            ->add('apuntes', 'doctrine_orm_model', array (  'field_type' => 'entity',  'field_options' =>   array (    'class' => 'Weo\\BancoBundle\\Entity\\Apunte',  ),  'options' =>   array (  ),  'operator_type' => 'sonata_type_boolean',  'operator_options' =>   array (  ),  'field_name' => 'apuntes',  'mapping_type' => 4,))
        ;
    }
}