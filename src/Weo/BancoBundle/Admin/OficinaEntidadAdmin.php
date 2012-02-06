<?php
namespace Weo\BancoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OficinaEntidadAdmin extends Admin
{
    public function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nombre', 'text', array ())
            ->add('direccion', 'textarea', array ())
            ->add('lat', 'text', array ())
            ->add('lon', 'text', array ())
            ->add('nombre_contacto', 'text', array ())
            ->add('email_contacto', 'text', array ())
            ->add('telefono', 'text', array ())
            ->add('codigo_oficina', 'text', array ())
            ->add('entidad', 'orm_many_to_one', array ())
            ->add('cuentas', 'orm_one_to_many', array ())
        ;
    }

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombre', NULL, array (), array ())
            ->add('direccion', NULL, array (), array ())
            ->add('lat', NULL, array (), array ())
            ->add('lon', NULL, array (), array ())
            ->add('nombre_contacto', NULL, array (), array ())
            ->add('email_contacto', NULL, array (), array ())
            ->add('telefono', NULL, array (), array ())
            ->add('codigo_oficina', NULL, array (), array ())
            ->add('entidad', NULL, array (), array ())
           // ->add('cuentas', NULL, array (), array ())
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre', 'text', array ())
            ->add('direccion', 'textarea', array ())
            ->add('lat', 'text', array ())
            ->add('lon', 'text', array ())
            ->add('nombre_contacto', 'text', array ())
            ->add('email_contacto', 'text', array ())
            ->add('telefono', 'text', array ())
            ->add('codigo_oficina', 'text', array ())
            ->add('entidad', 'orm_many_to_one', array ())
            ->add('cuentas', 'orm_one_to_many', array ())
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'nombre',))
            ->add('direccion', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'direccion',))
            ->add('lat', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'lat',))
            ->add('lon', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'lon',))
            ->add('nombre_contacto', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'nombre_contacto',))
            ->add('email_contacto', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'email_contacto',))
            ->add('telefono', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'telefono',))
            ->add('codigo_oficina', 'doctrine_orm_string', array (  'field_type' => 'text',  'field_options' =>   array (  ),  'options' =>   array (  ),  'field_name' => 'codigo_oficina',))
            ->add('entidad', 'doctrine_orm_model', array (  'field_type' => 'entity',  'field_options' =>   array (    'class' => 'Weo\\BancoBundle\\Entity\\EntidadBanco',  ),  'options' =>   array (  ),  'operator_type' => 'sonata_type_boolean',  'operator_options' =>   array (  ),  'field_name' => 'entidad',  'mapping_type' => 2,))
            ->add('cuentas', 'doctrine_orm_model', array (  'field_type' => 'entity',  'field_options' =>   array (    'class' => 'Weo\\BancoBundle\\Entity\\Cuenta',  ),  'options' =>   array (  ),  'operator_type' => 'sonata_type_boolean',  'operator_options' =>   array (  ),  'field_name' => 'cuentas',  'mapping_type' => 4,))
        ;
    }
}