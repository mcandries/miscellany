<?php

return [
    'description'   => 'Algunos trucos y consejos para que sea más sencilla tu estancia en Kanka',
    'dice'          => [
        'description'               => 'Es posible hacer tiradas de dados genéricas escribiendo "d20", "4d4+4", "d%" para porcentual y "df" para fudge.',
        'description_attributes'    => 'También se puede obtener el atributo de un personaje utilizando el código {character.nombre_atributo}. Por ejemplo: {character.nivel}d6+{character.sabiduria}.',
        'more'                      => 'Para ver más opciones disponibles, puedes buscar en la página web del plugin de dados.',
        'title'                     => 'Tiradas de dados',
    ],
    'filters'       => [
        'description'   => 'Puedes usar los filtros para limitar la cantidad de resultados que se muestra en las listas. Los campos de textos soportan varias opciones para controlar detalladamente qué se excluye con los filtros.',
        'empty'         => 'Si escribes :tag en un campo, se buscarán todas las entidades donde este campo esté vacío.',
        'ending_with'   => 'Poniendo una :tag al final del texto, puedes buscar todas las demás entidades con este texto en ese campo.',
        'session'       => 'Los filtros y el orden de las columnas en la lista de entidades se guardan en tu sesión, así que mientras te mantengas conectado no necesitarás volverlas a configurar en cada página.',
        'starting_with' => 'Añadiendo un :tag antes del texto, puedes buscar cualquier entidad que no contenga el texto en ese campo.',
        'title'         => 'Cómo usar los filtros',
    ],
    'link'          => [
        'auto_update'       => 'Los enlaces a otras entidades se actualizarán automáticamente cuando se cambie el nombre o la descripción de éstas.',
        'description'       => 'Puedes enlazar fácilmente otras entidades usando los siguientes atajos.',
        'friendly_mentions' => 'Enlaza a otras entidades escribiendo :code y los primeros caracteres de una entidad para buscarla. Esto insertará :example en el editor de texto, y se mostrará como un enlace a la entidad al ver dicha entidad.',
        'limitations'       => 'Por favor, ten en cuenta que debido a limitaciones técnicas estos atajos no funcionan en dispositivos móviles android.',
        'mentions'          => 'Enlaza a otras entidades escribiendo :code y los primeros caracteres de una entidad para buscarla. Esto introducirá :example en el editor de texto. Para personalizar el nombre a mostrar, puedes escribir :example_name. Para indicar una subpágina concreta de la entidad, usa :example_page. Para indicar una pestaña concreta, usa :example_tab.',
        'months'            => 'Escribe :code para obtener una lista con los meses de tus calendarios.',
        'title'             => 'Enlazar a otras entidades y atajos',
    ],
    'map'           => [
        'description'   => 'Al subir un mapa a un lugar, se habilitará el menú de Mapa en la página de ese lugar con un enlace directo al mapa. Desde la vista de mapa, los usuarios que tienen permiso para editar la localización podrán, a su vez, editar el mapa y añadirle puntos. Estos pueden enlazar a una entidad existente o ser simples etiquetas, y pueden tener varias formas y tamaños.',
        'private'       => 'Los administradores de la campaña pueden hacer que un mapa sea privado. Esto permite que los usuarios puedan ver un lugar, pero los admins puedan mantener el mapa en secreto.',
        'title'         => 'Mapas del lugar',
    ],
    'public'        => 'Mira el vídeo tutorial en Youtube acerca de las campañas públicas.',
    'title'         => 'Consejos',
];
