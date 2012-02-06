<?php
namespace Weo\BancoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CuentaAdmin extends Admin
{
    public function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nombre', 'text', array ())
            ->add('usuario_id', 'integer', array ())
            ->add('compartida', 'boolean', array ())
            ->add('numero_cuenta', 'text', array ())
            ->add('tipo_cuenta', 'orm_many_to_one', array ())
            ->add('entidad', 'orm_many_to_one', array ())
            ->add('oficina', 'orm_many_to_one', array ())
        ;
    }

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombre', NULL, array (), array ())
            ->add('usuario_id', NULL, array (), array ())
            ->add('compartida', NULL, array (), array ())
            ->add('numero_cuenta', NULL, array (), array ())
            ->add('tipo_cuenta', NULL, array (), array ())
            ->add('entidad', NULL, array (), array ())
            ->add('oficina', NULL, array (), array ())
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre', 'text', array ())
            ->add('usuario_id', 'integer', array ())
            ->add('compartida', 'boolean', array ())
            ->add('numero_cuenta', 'text', array ())
            ->add('tipo_cuenta', 'orm_many_to_one', array ())
            ->add('entidad', 'orm_many_to_one', array ())
            ->add('oficina', 'orm_many_to_one', array ())
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'nombre',))
            ->add('usuario_id', 'doctrine_orm_number', array (  'field_type' => 'number',  'field_options' =>   array (    'csrf_protection' => false,  ),  'options' =>   array (  ),  'field_name' => 'usuario_id',))
            ->add('compartida', 'doctrine_orm_boolean', array (  'field_type' => 'sonata_type_boolean',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'compartida',))
            ->add('numero_cuenta', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'numero_cuenta',))
            ->add('tipo_cuenta', 'doctrine_orm_model', array (  'field_type' => 'entity',  'field_options' =>   array (    'class' => 'Weo\\BancoBundle\\Entity\\TipoCuenta',  ),  'options' =>   array (  ),  'operator_type' => 'sonata_type_boolean',  'operator_options' =>   array (  ),  'field_name' => 'tipo_cuenta',  'mapping_type' => 2,))
            ->add('entidad', 'doctrine_orm_model', array (  'field_type' => 'entity',  'field_options' =>   array (    'class' => 'Weo\\BancoBundle\\Entity\\EntidadBanco',  ),  'options' =>   array (  ),  'operator_type' => 'sonata_type_boolean',  'operator_options' =>   array (  ),  'field_name' => 'entidad',  'mapping_type' => 2,))
            ->add('oficina', 'doctrine_orm_model', array (  'field_type' => 'entity',  'field_options' =>   array (    'class' => 'Weo\\BancoBundle\\Entity\\OficinaEntidad',  ),  'options' =>   array (  ),  'operator_type' => 'sonata_type_boolean',  'operator_options' =>   array (  ),  'field_name' => 'oficina',  'mapping_type' => 2,))
        ;
    }
}