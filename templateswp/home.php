<?php 


?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="fontOne">Fukiya</h1>
                <spam class="japan">あなたにとって最高のテーマ</spam>
                <p class="fontTwo">
                    Fukiya es un tema de WordPress desarrollado por Isaac Navajas Pozo, diseñado específicamente para el desarrollo con código. ¿Alguna vez te has encontrado en la situación de tener que trabajar en un proyecto que debería ser en PHP pero te ves obligado a implementarlo en WordPress? Pues bien, este tema te ofrece la solución perfecta para ese escenario. 
                </p>
                <p class="fontTwo">
                    Con Fukiya, podrás abordar proyectos que requieran un enfoque más técnico y personalizado dentro del entorno de WordPress. Su estructura flexible y sus características avanzadas te permiten sacar el máximo provecho de la plataforma, mientras aprovechas la potencia y la flexibilidad del código PHP. Desde la gestión de bases de datos, gestión directa de plugins y shortcodes, hasta la personalización de funciones, Fukiya te brinda las herramientas necesarias para llevar tus proyectos al siguiente nivel en WordPress.
                </p>
                <p class="fontTwo">
                Fukiya no solo simplifica el proceso de desarrollo en WordPress, sino que también ofrece una amplia gama de opciones de personalización y una sólida base para la creación de sitios web dinámicos y funcionales. 
                </p>
            </div>
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/src/FUKIYA_STUDIO__1.png" alt="MDN" class="imageSize"/>                
            </div>
        </div>
        
        
        
        
        <div class="row">
            <div class="col-6">
                <h2 class="fontOne">Documentacion</h2>
                <spam class="japan">祖先の文書</spam>
               
                    
                <p class="fontTwo">
                    He creado una documentación detallada para identificar cada archivo y comprender cómo utilizar el tema de manera adecuada.
                </p>
                <p class="fontTwo">
                    Esta guía proporciona instrucciones paso a paso, ejemplos prácticos y consejos útiles para maximizar el potencial del tema y aprovechar al máximo sus características y funcionalidades. 
                </p>
                
            </div>
            
            <div class="col-6 carpetas">
                <div class="row">
                <div class="col-7">
                    
                 <pre><code>
        Fukiya:
        
        │
        ├── admin
        │   ├── admin-script.js
        │   ├── admin.css
        │   └── functions.php
        │
        ├── pages
        │   └── page-documentacion-fukiya.php
        │        
        ├── plantillas
        │
        ├── src
        │   └── fonts
        │  
                </pre></code>
                </div>
                
                <div class="col-5">
                    
                 <pre><code>
            
                     
├── templatewp
│   ├── home.php
│   └── single.php
│
├── footer.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── script.js
└── style.css
                </pre></code>
                </div>
                </div>
                
                
         </div>
         
         
         
         
         
          <div class="row top-imagen">
            <div class="col-6" >
                <h2 class="fontOne">Admin</h2>
                <spam class="japan">知識へのアクセス</spam>
                 <p class="fontTwo">
                    El admin de WordPress es la interfaz de administración que permite gestionar y controlar todas las funcionalidades de un sitio web construido en esta plataforma. Desde el panel de administración, los usuarios pueden crear y editar contenido, instalar plugins, modificar el diseño del sitio, gestionar usuarios y mucho másm ahora verás como con el tema de Fukiya puedes mejorar el admin de WordPress.
                </p>
                <p class="fontTwo">
                    <strong>admin-script.js: </strong> Se encarga de gestionar el JavaScript dentro del panel de administración de WordPress, permitiendo la implementación de funcionalidades dinámicas y mejoras en la experiencia del usuario.
                </p>
                <p class="fontTwo">
                    <strong>admin.css: </strong>Gestiona el CSS dentro del panel de administración de WordPress, lo que posibilita la personalización y el diseño de la interfaz de administración para adaptarlo a las necesidades específicas del sitio web.
                </p>
                <p class="fontTwo">
                    <strong>functions.php: </strong>Responsable de gestionar el PHP dentro del panel de administración de WordPress, incluyendo la integración de hooks y cualquier código personalizado necesario para mejorar la lógica y funcionalidad del backoffice. He dejado algunos ejemplos que pueden ayudarte en tu configuración de WordPress.
                </p>

            </div>
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/src/FUKIYA_STUDIO__7.png" alt="MDN" class="imageSize"/>                
            </div>
        </div>
        
        
        
        
        <div class="row ">
            <div class="col-6" >
                <h2 class="fontOne">Pages</h2>
                <spam class="japan">タオのページ</spam>
                <p class="fontTwo">
                    <strong>pages: </strong>
                    La carpeta 'pages' de Fukiya es una característica fundamental diseñada para facilitar la programación y gestión de las páginas en WordPress. Ofrece una metodología estructurada para desarrollar páginas personalizadas dentro del entorno de WordPress, permitiendo a los usuarios configurar y desplegar contenido de forma coherente.
                    <p class="fontTwo">
                    La configuración del tema Fukiya requiere un enfoque particular al crear y vincular archivos a páginas específicas. En este sentido, el proceso se inicia en el panel de administración de WordPress, donde los usuarios deben primero crear la página deseada. Posteriormente, para asociar un archivo de plantilla a esta página, se requiere una acción adicional a nivel del tema.
                    Para llevar a cabo esta asociación, los usuarios deben acceder al directorio del tema Fukiya (dentro de la carpeta pages) a través de FTP y agregar un archivo con un nombre específico. Este nombre debe seguir una convención definida: debe comenzar con <span class="japan">"page-"</span> seguido del slug correspondiente al archivo creado en WordPress anteriormente.
                    </p>
                    <p class="fontTwo">
                    Este enfoque estratégico garantiza una integración coherente entre la interfaz de usuario de WordPress y la estructura del tema Fukiya. Al seguir este proceso, los usuarios pueden mantener una organización clara en su desarrollo de páginas, asegurando que cada página esté respaldada por una implementación técnica y que se integra sin problemas con el tema.
                </p>
               
            </div>
            <div class="col-6 top-imagen">
                <img src="<?php echo get_template_directory_uri(); ?>/src/FUKIYA_STUDIO__10.png" alt="MDN" class="imageSize top-imagen"/>                
            </div>
        </div>
        
        
        
                                         
          <div class="row">
            <div class="col-6" >
                <h2 class="fontOne">Plantillas</h2>
                <spam class="japan">すべてのために</spam>

                <p class="fontTwo">
                    <strong>plantillas: </strong>Las plantillas en WordPress son archivos que determinan la apariencia y el diseño de las páginas de un sitio web. Cada tipo de página, como la página de inicio, las entradas de blog individuales o las páginas de categorías, tiene su propia plantilla asociada. Estas plantillas son fundamentales para la creación y personalización de un sitio web en WordPress, ya que permiten a los desarrolladores definir cómo se estructura y se muestra el contenido en cada página.
                </p>
                
                <p class="fontTwo">
                    Para cambiar esta plantilla, la podéis cambiar al entrar a una página dentro del backoffice de WordPress, en la sección plantillas.
                </p>
                <p class="fontTwo">
                   En el tema de Fukiya, dentro de la carpeta de plantillas, puedes crear tus propios plantillas siguiendo una nomenclatura específica para asegurar su correcto funcionamiento. Al igual que en el ejemplo que tiene el tema de Fukiya, hay que agregar en la primera línea un comentario sobre el nombre de la plantilla: 
                </p>
                <p class="fontTwo japan">
                   /* Template Name: Página Personalizada Fukiya */
                </p>
            </div>
            <div class="col-6 top-imagen">
                <img src="<?php echo get_template_directory_uri(); ?>/src/FUKIYA_STUDIO__8.png" alt="MDN" class="imageSize"/>                
            </div>
        </div>
        
        
        
        
                 
          <div class="row top-imagen">
            <div class="col-6" >
                <h2 class="fontOne">Src</h2>
                <spam class="japan">すべてのために</spam>
                <p class="fontTwo">
                    <strong>src: </strong>La carpeta "src" desempeña un papel fundamental como origen de los recursos esenciales utilizados en el frontend de tu tema de WordPress Fukiya. En esta ubicación, podrás agregar una variedad de archivos cruciales que contribuyen a la estética, funcionalidad y experiencia del usuario en tu sitio web. Entre estos recursos se incluyen imágenes cuidadosamente seleccionadas, fuentes tipográficas distintivas y bibliotecas de terceros, como Bootstrap, que añaden robustez y flexibilidad al diseño y comportamiento del frontend.
                </p>
                <p class="fontTwo">
                    Para la inclusión de la biblioteca Bootstrap en la carpeta "src", se recomienda agregar los siguientes archivos en vez de toda la librería: bootstrap.min.css, bootstrap-icons.min.css, bootstrap-icons.woff, bootstrap-icons.woff2 y bootstrap.bundle.min.js.
                </p>
            </div>
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/src/FUKIYA_STUDIO__9.png" alt="MDN" class="imageSize"/>                
            </div>
        </div>
        
        
        

        
                         
          <div class="row">
            <div class="col-6" >
                <h2 class="fontOne">Templatewp</h2>
                <spam class="japan">すべてのために</spam>
                <p class="fontTwo">
                    <strong>templatewp: </strong>Los archivos dinámicos o templates en WordPress son fundamentales para la estructura y la presentación del contenido en un sitio web. Estos archivos determinan cómo se muestra cada tipo de página, como la página de inicio, las páginas de entradas de blog, las páginas de categorías, etc. Cada archivo de template en WordPress está asociado con un tipo específico de contenido y define la disposición, el diseño y la funcionalidad de esa página en particular.
                </p>
                <p class="fontTwo">
                Los archivos dinámicos o templates en WordPress son fundamentales para la estructura y la presentación del contenido en un sitio web. Estos archivos determinan cómo se muestra cada tipo de página, como la página de inicio, las páginas de entradas de blog, las páginas de categorías, etc. Cada archivo de template en WordPress está asociado con un tipo específico de contenido y define la disposición, el diseño y la funcionalidad de esa página en particular.
                </p>
                <p class="fontTwo">
                En el tema de Fukiya, la personalización de estos archivos se realiza dentro de la carpeta 'templateswp'. Aquí, los desarrolladores tienen la capacidad de modificar los archivos de plantillas predeterminados de WordPress para adaptarlos a las necesidades específicas del sitio web. Para asignar estas plantillas dinámicas de WordPress a los archivos ubicados en la carpeta 'templateswp', se requiere una configuración desde el archivo 'index.php'. Este archivo sirve como el punto de entrada principal del tema y es donde se definen las relaciones entre las partes dinámicas del sitio y los archivos de templates personalizadas. Puedes ayudarte con los nombres de 'WordPress Cheat Sheets' dentro del 'index.php' que he dejado en el tema, así puedes asignar de manera eficiente las partes dinámicas a los archivos previamente creados en la carpeta 'templateswp', garantizando una presentación coherente y funcional del contenido en el sitio web.
                </p> 
            </div>
            <div class="col-6" style="margin-top:80px;">
                <img src="<?php echo get_template_directory_uri(); ?>/src/FUKIYA_STUDIO__4.png" alt="MDN" class="imageSize"/>                
            </div>
        </div>
        
        
        
         
          <div class="row">
            <div class="col-6">
                <h2 class="fontOne">Carpeta raíz</h2>
                <spam class="japan">あなたにとって最高のテーマ</spam>
                <p class="fontTwo">
                    La carpeta raíz del tema alberga archivos esenciales que son críticos para garantizar el correcto funcionamiento y la cohesión del tema. Además, dentro de esta ubicación central, se encuentran otros archivos destinados a la configuración y personalización del tema, añadiendo una capa adicional de versatilidad y adaptabilidad a la experiencia de desarrollo del usuario:
                </p>
                <p class="fontTwo">
                    <strong>footer.php: </strong>Para programar en PHP el footer.
                </p>
                <p class="fontTwo">
                    <strong>header.php: </strong>Para programar en PHP el header
                </p>
                <p class="fontTwo">
                    <strong>script.js: </strong>Para programar el javascript del frontend.
                </p>
                <p class="fontTwo">
                    <strong>style.css: </strong>Para programar el CSS del frontend.
                </p>
            </div>
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/src/FUKIYA_STUDIO__2.png" alt="MDN" class="imageSize"/>                
            </div>
        </div>
        
        
    
    </div>
    
    
