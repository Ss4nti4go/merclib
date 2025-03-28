<?php
    $data = json_decode( file_get_contents('https://randomuser.me/api'), true );

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información personal | Mercado Libre</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-container">
            <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.19.1/mercadolibre/logo__large_plus.png" alt="Mercado Libre" class="logo">
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Buscar productos, marcas y más...">
                <button class="search-button">🔍</button>
            </div>
            <div class="location">
              
                <span>Ingresa tu ubicación</span>
            </div>
            <button class="benefits-button">¡Consigue tus beneficios!</button>
            <img  src="<?php echo $data['results'][0]['picture']['medium']?>" id="profile-picture" alt="">
        </div>
    </header>
    
    <div class="navbar">
        <div class="nav-container">
            <a class="nav-item">Categorías</a>
            <a class="nav-item">Ofertas</a>
            <a class="nav-item">Cupones</a>
            <a class="nav-item">Supermercado</a>
            <a class="nav-item">Moda</a>
            <a class="nav-item">Mercado Play</a>
            <a class="nav-item">Vender</a>
            <a class="nav-item">Ayuda</a>
            
            <div class="user-menu">
                <a class="user-menu-item">Santiago...</a>
                <a class="user-menu-item">Mis compras</a>
                <a class="user-menu-item">Favoritos</a>
                <a class="user-menu-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                  </svg></a>
                <a class="user-menu-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                  </svg></a>
            </div>
        </div>
    </div>
   
    <div class="main-container">
        <div class="sidebar">
            <div class="sidebar-header">
                <span class="menu-icon">☰</span>
                <span>Mi cuenta</span>
            </div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                      </svg></span>
                    <span>Compras</span>
                    <span class="arrow">▼</span>
                </li>
                <li class="sidebar-menu-item">
                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                        <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0"/>
                        <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z"/>
                      </svg></span>
                    <span>Ventas</span>
                    <span class="arrow">▼</span>
                </li>
                <li class="sidebar-menu-item">
                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-detailed" viewBox="0 0 16 16">
                        <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2z"/>
                        <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5z"/>
                      </svg></span>
                    <span>Marketing</span>
                    <span class="arrow">▼</span>
                </li>
                <li class="sidebar-menu-item">
                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                      </svg></span>
                    <span>Facturación</span>
                </li>
                <li class="sidebar-menu-item active">
                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                      </svg></span>
                    <span>Mi perfil</span>
                </li>
                <li class="sidebar-menu-item">
                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
                      </svg></span>
                    <span>Configuración</span>
                    <span class="arrow">▼</span>
                </li>
            </ul>
        </div>
        
        <div class="content">
            <div class="breadcrumb">
                <a href="#">Mi perfil</a>
                <span class="separator">-></span>
                <span>Información personal</span>
            </div>
            
            <h2 class="account-section">Datos de la cuenta</h2>
            <h1 class="content-title">Información de la cuenta</h1>
            
            <div class="data-card">
           
                
                <div class="data-row">
                    <p class="data-label">Nombre y apellido</p>
                    <p class="data-value"><?php print_r($data['results'][0]['name']['title']." ".$data['results'][0]['name']['first']." ".$data['results'][0]['name']['last']  ) ?></p>
                    <p class="data-arrow">-></p>
                </div>
                
                <div class="data-row">
                    <p class="data-label">CI</p>
                    <p class="data-value"><?php echo $data['results'][0]['id']['value'] ; ?></p>
                    <p class="data-arrow">-></p>
                </div>
                
              
            </div>
            
            <div class="data-card">
                <div class="data-row">
                    <p class="data-label">Nombre elegido</p>
                    <p class="data-value"><?php echo $data['results'][0]['login']['username'] ; ?></p>
                    <p class="data-arrow">-></p>
                </div>
                
             
            </div>
            
            <div class="data-card">
                <div class="data-row">
                    <p class="data-label">Correo electrónico</p>
                    <p class="data-value"><?php echo $data['results'][0]['email'] ; ?></p>
                    <p class="data-arrow">-></p>
                </div>
                
               
            </div>
            
            <div class="data-card">
                <div class="data-row">
                    <p class="data-label">Teléfono</p>
                    <p class="data-value"><?php echo $data['results'][0]['phone'] ; ?></p>
                    <p class="data-arrow">-></p>
                </div>
                
               
            </div>
            
            <div class="data-card">
                <div class="data-row">
                    <p class="data-label">Domicilio</p>
                    <p class="data-value"><?php print_r($data['results'][0]['location']['street']['name']." ".$data['results'][0]['location']['street']['number']); ?></p>
                    <p class="data-arrow">-></p>
                </div>
                
               
            </div>
        </div>
    </div>
    ?>
    <div class="footer">
 
    </div>
    <script src="js/main.js"></script>
</body>
</html>