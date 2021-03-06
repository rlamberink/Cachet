<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard'          => 'Panel de Control',
    'writeable_settings' => 'The Cachet settings directory is not writeable. Please make sure that <code>./bootstrap/cachet</code> is writeable by the web server.',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidents & Maintenance',
        'incidents'                => 'Incidentes',
        'logged'                   => '{0}There are no incidents, good work.|[1]You have logged one incident.|[2,*]You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'Crear plantilla',
        'incident-templates'       => 'Plantillas de incidente',
        'updates'                  => [
            'title'   => 'Incident updates for :incident',
            'count'   => '{0}Zero Updates|[1]One Update|[2]Two Updates|[3,*]Several Updates',
            'add'     => [
                'title'   => 'Create new incident update',
                'success' => 'Your new incident update has been created.',
                'failure' => 'Something went wrong with the incident update.',
            ],
            'edit' => [
                'title'   => 'Edit incident update',
                'success' => 'The incident update has been updated.',
                'failure' => 'Something went wrong updating the incident update',
            ],
        ],
        'reported_by'              => 'Reported :timestamp by :user',
        'add'                      => [
            'title'   => 'Reportar incidente',
            'success' => 'Incidente agregado.',
            'failure' => 'Hubo un error agregando el incidente, por favor intente de nuevo.',
        ],
        'edit' => [
            'title'   => 'Editar un incidente',
            'success' => 'Incidente actualizado.',
            'failure' => 'Hubo un error editando el incidente, por favor intente de nuevo.',
        ],
        'delete' => [
            'success' => 'El incidente se ha eliminado y no se mostrar?? en tu p??gina de estado.',
            'failure' => 'El incidente no se pudo eliminar, por favor intente de nuevo.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Plantillas de incidente',
            'add'   => [
                'title'   => 'Crear una plantilla de incidente',
                'message' => 'Create your first incident template.',
                'success' => 'Su nueva plantilla de incidentes ha sido creada.',
                'failure' => 'Algo sali?? mal con la plantilla de incidente.',
            ],
            'edit' => [
                'title'   => 'Editar plantilla',
                'success' => 'La plantilla de incidente ha sido actualizada.',
                'failure' => 'Algo sali?? mal actualizando la plantilla de incidente',
            ],
            'delete' => [
                'success' => 'La plantilla de incidente se ha eliminado.',
                'failure' => 'La plantilla de incidente no se pudo eliminar. Por favor, int??ntalo de nuevo.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Maintenance',
        'logged'       => '{0}There has been no Maintenance, good work.|[1]You have logged one schedule.|[2,*]You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Programado para :timestamp',
        'add'          => [
            'title'   => 'Add Maintenance',
            'success' => 'Maintenance added.',
            'failure' => 'Something went wrong adding the Maintenance, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Maintenance',
            'success' => 'Maintenance has been updated!',
            'failure' => 'Something went wrong editing the Maintenance, please try again.',
        ],
        'delete' => [
            'success' => 'The Maintenance has been deleted and will not show on your status page.',
            'failure' => 'The Maintenance could not be deleted, please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Componentes',
        'component_statuses' => 'Estatus de los componentes',
        'listed_group'       => 'Agrupado bajo :nombre',
        'add'                => [
            'title'   => 'Agregar componente',
            'message' => 'Deber??as agregar un componente.',
            'success' => 'Componente creado.',
            'failure' => 'Algo sali?? mal con el componente, por favor intente de nuevo.',
        ],
        'edit' => [
            'title'   => 'Editar componente',
            'success' => 'Componente actualizado.',
            'failure' => 'Algo sali?? mal con el componente, por favor intente de nuevo.',
        ],
        'delete' => [
            'success' => 'El componente se ha eliminado!',
            'failure' => 'El componente no pudo ser eliminado, por favor, int??ntelo de nuevo.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grupo de componente|Grupos de componente',
            'no_components' => 'Usted deber??a agregar un grupo de componentes.',
            'add'           => [
                'title'   => 'Agregar un grupo de componentes',
                'success' => 'Grupo de componentes agregado.',
                'failure' => 'Algo sali?? mal con el componente, por favor intente de nuevo.',
            ],
            'edit' => [
                'title'   => 'Editar un grupo de componentes',
                'success' => 'Grupo de componentes actualizado.',
                'failure' => 'Algo sali?? mal con el componente, por favor intente de nuevo.',
            ],
            'delete' => [
                'success' => 'El grupo de componentes se ha eliminado!',
                'failure' => 'El grupo de componentes no pudo ser eliminado, por favor, int??ntelo de nuevo.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'M??tricas',
        'add'     => [
            'title'   => 'Crear una m??trica o indicador',
            'message' => 'Deber??as a??adir una m??trica.',
            'success' => 'M??trica creada.',
            'failure' => 'Algo sali?? mal con la m??trica, por favor, int??ntelo de nuevo.',
        ],
        'edit' => [
            'title'   => 'Editar una m??trica',
            'success' => 'M??trica actualizada.',
            'failure' => 'Algo sali?? mal con la m??trica, por favor, int??ntelo de nuevo.',
        ],
        'delete' => [
            'success' => 'La m??trica se ha eliminado y no se mostrar?? m??s en tu p??gina de estado.',
            'failure' => 'La m??trica no pudo ser eliminada, por favor, int??ntelo de nuevo.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'Suscriptores',
        'description'          => 'Los suscriptores recibir??n actualizaciones por correo electr??nico cuando se creen incidentes o se actualicen componentes.',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'             => 'Verificado',
        'not_verified'         => 'No confirmado',
        'subscriber'           => ':email, suscrito :date',
        'no_subscriptions'     => 'Suscrito a todas las actualizaciones',
        'global'               => 'Globally subscribed',
        'add'                  => [
            'title'   => 'Agregar un nuevo subscriptor',
            'success' => 'Subscriptor agregado.',
            'failure' => 'Algo sali?? mal al agregar el suscriptor, por favor, int??ntelo de nuevo.',
            'help'    => 'Agregue cada subscriptor en una l??nea nueva.',
        ],
        'edit' => [
            'title'   => 'Actualizar subscriptor',
            'success' => 'Subscriptor actualizado.',
            'failure' => 'Algo sali?? mal al editar el suscriptor, por favor, int??ntelo de nuevo.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Equipo',
        'member'      => 'Miembro',
        'profile'     => 'Perfil',
        'description' => 'Los miembros del equipo ser?? capaces de a??adir, modificar y editar componentes e incidentes.',
        'add'         => [
            'title'   => 'A??adir a un nuevo miembro de equipo',
            'success' => 'Miembro del equipo agregado.',
            'failure' => 'No se pudo agregar el miembro del equipo, por favor vuelva a intentarlo.',
        ],
        'edit' => [
            'title'   => 'Actualizar perfil',
            'success' => 'Perfil actualizado.',
            'failure' => 'Algo sali?? mal actualizando el perfil, por favor intente de nuevo.',
        ],
        'delete' => [
            'success' => 'El miembro del equipo ha sido eliminado y ya no tendr??n acceso al Pane de Control!',
            'failure' => 'No se pudo agregar el miembro del equipo, por favor vuelva a intentarlo.',
        ],
        'invite' => [
            'title'   => 'Invitar a un nuevo miembro al equipo',
            'success' => 'Se ha enviado una invitaci??n',
            'failure' => 'La invitaci??n no pudo ser enviada, por favor intente de nuevo.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Ajustes',
        'app-setup' => [
            'app-setup'   => 'Configuraci??n de aplicaci??n',
            'images-only' => 'S??lo puedes subir im??genes.',
            'too-big'     => 'El archivo subido es demasiado grande. Sube una imagen con tama??o menor a: tama??o',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'log' => [
            'log' => 'Log',
        ],
        'localization' => [
            'localization' => 'Localizaci??n',
        ],
        'customization' => [
            'customization' => 'Personalizaci??n',
            'header'        => 'Cabecera HTML personalizada',
            'footer'        => 'Pie HTML personalizado',
        ],
        'mail' => [
            'mail'  => 'Mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Test notification from Cachet',
                'body'    => 'This is a test notification from Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Seguridad',
            'two-factor' => 'Usuarios sin autenticaci??n de dos factores',
        ],
        'stylesheet' => [
            'stylesheet' => 'Hoja de estilo',
        ],
        'theme' => [
            'theme' => 'Tema',
        ],
        'edit' => [
            'success' => 'Configuraci??n guardada.',
            'failure' => 'La configuraci??n no se podido guardar.',
        ],
        'credits' => [
            'credits'       => 'Cr??ditos',
            'contributors'  => 'Colaboradores',
            'license'       => 'Cachet es un proyecto de c??digo libre bajo la licencia BSD-3, liberado por <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Patrocinadores',
            'backers'       => 'Si desea apoyar futuros desarrollos, ingrese a la campa??a de <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a>.',
            'thank-you'     => 'Gracias a todos y cada uno de los :count colaboradores.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Iniciar Sesi??n',
        'logged_in'  => 'Est??s conectado.',
        'welcome'    => '??Bienvenido!',
        'two-factor' => 'Por favor ingresa tu token.',
    ],

    // Sidebar footer
    'help'        => 'Ayuda',
    'status_page' => 'P??gina de estado',
    'logout'      => 'Salir',

    // Notifications
    'notifications' => [
        'notifications' => 'Notificaciones',
        'awesome'       => 'Excelente.',
        'whoops'        => 'Whoops.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Apoye Cachet',
        'support_subtitle' => '??Visite nuestro proyecto en la p??gina de <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong>!',
        'news'             => '??ltimas noticias',
        'news_subtitle'    => 'Obtener las actualizaciones m??s recientes',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Bienvenido a tu p??gina de estado!',
        'message' => 'La p??gina de estado est?? casi lista! Tal vez quieras configurar estos ajustes adicionales',
        'close'   => 'Ll??vame directamente a mi dashboard',
        'steps'   => [
            'component'  => 'Crear componentes',
            'incident'   => 'Crear incidentes',
            'customize'  => 'Personalizar',
            'team'       => 'Agregar Usuarios',
            'api'        => 'Generar token API',
            'two-factor' => 'Autenticaci??n de dos factores',
        ],
    ],

];
