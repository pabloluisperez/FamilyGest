<?php
namespace Weo\BancoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ApunteAdmin extends Admin
{
    public function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('concepto', 'textarea', array ())
            ->add('fecha_apunte', 'datetime', array ())
            ->add('tipo_apunte', 'orm_many_to_one', array ())
            ->add('categoria_apunte', 'orm_many_to_one', array ())
            ->add('cuenta', 'orm_many_to_one', array ())
        ;
    }

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('concepto', NULL, array (), array ())
            ->add('fecha_apunte', NULL, array (), array ())
            ->add('tipo_apunte', NULL, array (), array ())
            ->add('categoria_apunte', NULL, array (), array ())
            ->add('cuenta', NULL, array (), array ())
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('concepto', 'textarea', array ())
            ->add('fecha_apunte', 'datetime', array ())
            ->add('tipo_apunte', 'orm_many_to_one', array ())
            ->add('categoria_apunte', 'orm_many_to_one', array ())
            ->add('cuenta', 'orm_many_to_one', array ())
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('concepto', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'concepto',))
            ->add('tipo_apunte', 'doctrine_orm_model', array (  'field_type' => 'entity',  'field_options' =>   array (    'class' => 'Weo\\BancoBundle\\Entity\\TipoApunte',  ),  'options' =>   array (  ),  'operator_type' => 'sonata_type_boolean',  'operator_options' =>   array (  ),  'field_name' => 'tipo_apunte',  'mapping_type' => 2,))
            ->add('categoria_apunte', 'doctrine_orm_model', array (  'field_type' => 'entity',  'field_options' =>   array (    'class' => 'Weo\\BancoBundle\\Entity\\CategoriaApunte',  ),  'options' =>   array (  ),  'operator_type' => 'sonata_type_boolean',  'operator_options' =>   array (  ),  'field_name' => 'categoria_apunte',  'mapping_type' => 2,))
            ->add('cuenta', 'doctrine_orm_model', array (  'field_type' => 'entity',  'field_options' =>   array (    'class' => 'Weo\\BancoBundle\\Entity\\Cuenta',  ),  'options' =>   array (  ),  'operator_type' => 'sonata_type_boolean',  'operator_options' =>   array (  ),  'field_name' => 'cuenta',  'mapping_type' => 2,))
        ;
    }
}