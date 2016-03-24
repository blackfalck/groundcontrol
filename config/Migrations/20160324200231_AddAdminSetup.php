<?php
use Migrations\AbstractMigration;

class AddAdminSetup extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('roles');
        $table->addColumn('active', 'integer', [
            'length' => 1,
            'after' => 'alias',
            'default' => 1
        ])
        ->update();
        
        
        $table = $this->table('languages', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'null' => false,
        ]);          
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
        ]);        
        $table->addColumn('code', 'string', [
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('active', 'integer', [
            'length' => 1,
            'default' => 1
        ]);        
        $table->addColumn('created', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('deleted', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
        
        
        
        $table = $this->table('i18n', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'null' => false,
        ]);          
        $table->addColumn('locale', 'string', [
            'limit' => 6,
            'null' => false,
        ]);        
        $table->addColumn('model', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('foreign_key', 'uuid', [
            'null' => false,
        ]);
        $table->addColumn('field', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('content', 'text', [
            'null' => true,
        ]);
        $table->create();
        
        
        
        $table = $this->table('menus', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'null' => false,
        ]); 
        $table->addColumn('parent_id', 'uuid', [
            'null' => true,
        ]);
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
        ]);        
        $table->addColumn('url', 'string', [
            'limit' => 255,
            'null' => false,
        ]);        
        $table->addColumn('lft', 'integer', [
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('rght', 'integer', [
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('active', 'integer', [
            'length' => 1,
            'default' => 1
        ]);        
        $table->addColumn('created', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('deleted', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
        
        
        
        $table = $this->table('pages', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'null' => false,
        ]); 
        $table->addColumn('parent_id', 'uuid', [
            'null' => true,
        ]);        
        $table->addColumn('title', 'string', [
            'limit' => 255,
            'null' => false,
        ]);        
        $table->addColumn('alias', 'string', [
            'limit' => 255,
            'null' => false,
        ]);                
        $table->addColumn('subtitle', 'string', [
            'limit' => 255,
            'null' => true,
        ]);        
        $table->addColumn('metadescription', 'text', [
            'null' => true,
        ]);
        $table->addColumn('metakey', 'text', [
            'null' => true,
        ]);        
        $table->addColumn('content', 'text', [
            'null' => false,
        ]);
        $table->addColumn('lft', 'integer', [
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('rght', 'integer', [
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('active', 'integer', [
            'length' => 1,
            'default' => 1
        ]);        
        $table->addColumn('created', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('deleted', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
        
        
        $table = $this->table('projects', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'null' => false,
        ]); 
        $table->addColumn('title', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('slug', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('subtitle', 'string', [
            'limit' => 255,
            'null' => true,
        ]); 
        $table->addColumn('date', 'datetime', [
            'null' => false,
        ]);  
        $table->addColumn('metadescription', 'text', [
            'null' => true,
        ]);
        $table->addColumn('metakey', 'text', [
            'null' => true,
        ]);  
        $table->addColumn('content', 'text', [
            'null' => false,
        ]);        
        $table->addColumn('active', 'integer', [
            'length' => 1,
            'default' => 1
        ]);        
        $table->addColumn('created', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('deleted', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
        
        
        $table = $this->table('projects_images', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'null' => false,
        ]); 
        $table->addColumn('project_id', 'uuid', [
            'null' => false,
        ]); 
        $table->addColumn('image_id', 'uuid', [
            'null' => false,
        ]); 
        $table->create();       
        
        
        $table = $this->table('images', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'null' => false,
        ]);        
        $table->addColumn('imagecategory_id', 'uuid', [
            'null' => false,
        ]); 
        
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('alt', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('filename', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('filenamehash', 'string', [
            'limit' => 255,
            'null' => false,
        ]);         
        $table->create();
                
        
        $table = $this->table('imagecategories', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'null' => false,
        ]);          
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
        ]);        
        $table->addColumn('alias', 'string', [
            'limit' => 255,
            'null' => false,
        ]);  
        $table->addColumn('active', 'integer', [
            'length' => 1,
            'default' => 1
        ]);
        $table->addColumn('created', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('deleted', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();  
        
        
        $table = $this->table('addresses', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'null' => false,
        ]); 
        $table->addColumn('addresstype_id', 'uuid', [
            'null' => false,
        ]);
        $table->addColumn('firstname', 'string', [
            'limit' => 255,
            'null' => false,
        ]);          
        $table->addColumn('middlename', 'string', [
            'limit' => 255,
            'null' => true,
        ]);        
        $table->addColumn('lastname', 'string', [
            'limit' => 255,
            'null' => false,
        ]);                
        $table->addColumn('address', 'string', [
            'limit' => 255,
            'null' => false,
        ]);      
        $table->addColumn('addresssecond', 'string', [
            'limit' => 255,
            'null' => false,
        ]);         
        $table->addColumn('zipcode', 'string', [
            'limit' => 255,
            'null' => false,
        ]);        
        $table->addColumn('city', 'string', [
            'limit' => 255,
            'null' => false,
        ]);         
        $table->addColumn('country', 'string', [
            'limit' => 255,
            'null' => false,
        ]);     
        $table->addColumn('created', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('deleted', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
        
        
        
        $table = $this->table('addresstypes', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'null' => false,
        ]);          
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
        ]);        
        $table->addColumn('alias', 'string', [
            'limit' => 255,
            'null' => false,
        ]);      
        $table->addColumn('active', 'integer', [
            'length' => 1,
            'default' => 1
        ]);
        $table->addColumn('created', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('deleted', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();  
        
        
        
    }
}
