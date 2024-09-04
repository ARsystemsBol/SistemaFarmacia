<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Proveedores
    $Proveedor = new Proveedor();
    $Proveedor-> proveedor = 'Grupo Alcos S.A.';
    $Proveedor-> lab = 'ALCOS';
    $Proveedor-> contacto = 'Of. Central - Secretaria';
    $Proveedor-> telefono = '2750075';
    $Proveedor-> email = 'info@grupoalcos.com';
    $Proveedor-> direccion = 'Obrajes Calle 7 #235';
    $Proveedor-> nit = 1007045023;
    $Proveedor-> nocuenta = '';
    $Proveedor-> banco = '';
    $Proveedor-> tcuenta = '';
    $Proveedor-> usuario_id = 1;

    $Proveedor->save();

    $Proveedor = new Proveedor();
    $Proveedor-> proveedor = 'Laboratorios Vita S.A.';
    $Proveedor-> lab = 'VITA';
    $Proveedor-> contacto = 'Of. Central La Paz';
    $Proveedor-> telefono = '2788060';
    $Proveedor-> email = 'pablo.collao@vita.com.bo';
    $Proveedor-> direccion = 'Av. Hector Ormachea # 320 Obrajes';
    $Proveedor-> nit = 1020711029;
    $Proveedor-> nocuenta = '';
    $Proveedor-> banco = '';
    $Proveedor-> tcuenta = '';
    $Proveedor-> usuario_id = 1;

    $Proveedor->save();
    
    $Proveedor = new Proveedor();
    $Proveedor-> proveedor = 'Laboratorios Bago de Bolivia S.A.';
    $Proveedor-> lab = 'BAGÓ';
    $Proveedor-> contacto = 'Of. Central';
    $Proveedor-> telefono = '2770110';
    $Proveedor-> email = 'bolivia@bago.com.bo';
    $Proveedor-> direccion = 'Av. Costanera # 1000 Edif. Costanera T.1, P-4';
    $Proveedor-> nit = 1020503020;
    $Proveedor-> nocuenta = '';
    $Proveedor-> banco = '';
    $Proveedor-> tcuenta = '';
    $Proveedor-> usuario_id = 1;

    $Proveedor->save();

    $Proveedor = new Proveedor();
    $Proveedor-> proveedor = 'Laboratorios de cosmetica y farmoquimica S.A.';
    $Proveedor-> lab = 'COFAR';
    $Proveedor-> contacto = 'Of. Central';
    $Proveedor-> telefono = '2220352';
    $Proveedor-> email = 'cofar@cofar.com.bo';
    $Proveedor-> direccion = 'C. Victor Eduardo 2293 Miraflores';
    $Proveedor-> nit = 1020603028;
    $Proveedor-> nocuenta = '';
    $Proveedor-> banco = '';
    $Proveedor-> tcuenta = '';
    $Proveedor-> usuario_id = 1;

    $Proveedor->save();

    $Proveedor = new Proveedor();
    $Proveedor-> proveedor = 'Laboratorios IFA';
    $Proveedor-> lab = 'IFA';
    $Proveedor-> contacto = 'Of. Central';
    $Proveedor-> telefono = '33431555';
    $Proveedor-> email = 'info@laboratoriosifa.com';
    $Proveedor-> direccion = 'Maquina Vieja C/Moxos #441 Cerca del 2º anillo';
    $Proveedor-> nit = 10288625022;
    $Proveedor-> nocuenta = '';
    $Proveedor-> banco = '';
    $Proveedor-> tcuenta = '';
    $Proveedor-> usuario_id = 1;

    $Proveedor->save();

    $Proveedor = new Proveedor();
    $Proveedor-> proveedor = 'PharmaTech Boliviana S.A.';
    $Proveedor-> lab = 'PHARMA';
    $Proveedor-> contacto = 'Of. Central Santa Cruz';
    $Proveedor-> telefono = '3340150';
    $Proveedor-> email = 'sbahuriet@pharmatech.com.bo';
    $Proveedor-> direccion = 'Av. San Martin c/9 Oeste Nº15 Equipetrol';
    $Proveedor-> nit = 1028387024;
    $Proveedor-> nocuenta = '';
    $Proveedor-> banco = '';
    $Proveedor-> tcuenta = '';
    $Proveedor-> usuario_id = 1;

    $Proveedor->save();

    $Proveedor = new Proveedor();
    $Proveedor-> proveedor = 'Tecnofarma S.A.';
    $Proveedor-> lab = 'TECNOFARMA';
    $Proveedor-> contacto = 'Of. Central Santa Cruz';
    $Proveedor-> telefono = '3393757';
    $Proveedor-> email = 'rolando.aramayo@tecnofarma.com.bo';
    $Proveedor-> direccion = 'Av. Velarde 2ºAnillo # 500 Trompillo';
    $Proveedor-> nit = 1020627026;
    $Proveedor-> nocuenta = '';
    $Proveedor-> banco = '';
    $Proveedor-> tcuenta = '';
    $Proveedor-> usuario_id = 1;

    $Proveedor->save();

    $Proveedor = new Proveedor();
    $Proveedor-> proveedor = 'Farmaval Bolivia SRL';
    $Proveedor-> lab = 'FARMAVAL';
    $Proveedor-> contacto = 'Of. Central Santa Cruz';
    $Proveedor-> telefono = '3115952';
    $Proveedor-> email = 'rsandoval@salvalcorp.com';
    $Proveedor-> direccion = 'Av. Beni entre 4º y 5º anillo C/M. Castro # 28';
    $Proveedor-> nit = 1023291025;
    $Proveedor-> nocuenta = '';
    $Proveedor-> banco = '';
    $Proveedor-> tcuenta = '';
    $Proveedor-> usuario_id = 1;

    $Proveedor->save();
    
    $Proveedor = new Proveedor();
    $Proveedor-> proveedor = 'South American Express S.A. SAE S.A.';
    $Proveedor-> lab = 'SAE';
    $Proveedor-> contacto = 'Of. Central La Paz';
    $Proveedor-> telefono = '2410676';
    $Proveedor-> email = 'saelapaz@saebolivia.com';
    $Proveedor-> direccion = 'C/Victor Sanjinez 2608 Sopocachi';
    $Proveedor-> nit = 1020111021;
    $Proveedor-> nocuenta = '';
    $Proveedor-> banco = '';
    $Proveedor-> tcuenta = '';
    $Proveedor-> usuario_id = 1;

    $Proveedor->save();

    $Proveedor = new Proveedor();
    $Proveedor-> proveedor = 'Drogueria INTI S.A.';
    $Proveedor-> lab = 'INTI';
    $Proveedor-> contacto = 'Of. Central La Paz';
    $Proveedor-> telefono = '2176600';
    $Proveedor-> email = 'ronald.reyes@inti.com.bo';
    $Proveedor-> direccion = 'C/Lucas Jaimes # 1959 Miraflores';
    $Proveedor-> nit = 1020521023;
    $Proveedor-> nocuenta = '';
    $Proveedor-> banco = '';
    $Proveedor-> tcuenta = '';
    $Proveedor-> usuario_id = 1;

    $Proveedor->save();
    }
}
