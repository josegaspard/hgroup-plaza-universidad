<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("header.php"); ?>
    <?php
    echo '<meta property="og:type" content="website" />';
    echo '<meta property="og:title" content="Mapa Interactivo | ' . $nombrePlaza . '" />';
    echo '<meta property="og:description" content="Mapa interactivo de ' . $nombrePlaza . '. Ubica tiendas en Planta Baja, Mezzanine y Sótano." />';
    echo '<meta name="twitter:card" content="summary_large_image" />';
    echo '<meta name="twitter:title" content="Mapa | ' . $nombrePlaza . '" />';
    echo '<meta name="twitter:description" content="Mapa interactivo de ' . $nombrePlaza . '." />';
    echo '<link rel="canonical" href="mapa.php" />';
    ?>
    <style>
        :root{--ink:#1a1a2e;--purple:#6B2D8B;--gold:#C9A96E;--cream:#F5F1EB;--warm:#fff;--smoke:#f5f5f5;--silver:#ccc;--grey:#888;--mid:#333;--serif:'Playfair Display',Georgia,serif;--sans:'Lato','Helvetica Neue',sans-serif;}
        html,body{height:100%;}
        body{font-family:var(--sans);background:var(--warm);color:var(--ink);-webkit-font-smoothing:antialiased;overflow:hidden;display:flex;flex-direction:column;}
        a{text-decoration:none;color:inherit;}img{display:block;max-width:100%;}

        /* NAV — relative for map layout */
        #nav{position:relative;width:100%;z-index:800;height:80px;padding:0 24px;display:flex;align-items:center;justify-content:space-between;background:var(--warm);border-bottom:1px solid var(--smoke);box-shadow:0 1px 3px rgba(0,0,0,.04);}
        .nav-logo{display:flex;align-items:center;gap:12px;}.nav-logo img{height:48px;width:auto;}
        .nav-logo-text{display:flex;flex-direction:column;}.nav-logo-text span:first-child{font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.2em;color:var(--purple);line-height:1;}
        .nav-logo-text span:last-child{font-size:18px;font-weight:700;text-transform:uppercase;color:var(--ink);letter-spacing:-.02em;line-height:1;}
        .nav-links{display:flex;align-items:center;gap:32px;}.nav-links a{font-size:12px;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--grey);transition:color .25s;}
        .nav-links a:hover{color:var(--ink);}.nav-links a.active{color:var(--purple);border-bottom:2px solid var(--purple);padding-bottom:2px;}
        .nav-cta{background:var(--purple)!important;color:#fff!important;padding:10px 20px!important;border-radius:99px!important;font-size:12px!important;}.nav-cta:hover{background:#5a2375!important;}
        .nav-ham{display:none;flex-direction:column;gap:5px;background:none;border:none;padding:4px;cursor:pointer;}.nav-ham span{display:block;width:22px;height:1px;background:var(--ink);}
        #mob-menu{position:fixed;inset:0;z-index:700;background:var(--warm);display:flex;flex-direction:column;align-items:center;justify-content:center;opacity:0;pointer-events:none;transition:opacity .4s;}#mob-menu.open{opacity:1;pointer-events:all;}
        #mob-menu a{font-family:var(--sans);font-size:28px;font-weight:700;text-transform:uppercase;color:var(--ink);display:block;margin:8px 0;text-align:center;}
        #mob-menu a.active-mob{color:var(--purple);}
        .mob-close{position:absolute;top:24px;right:32px;background:none;border:none;font-size:28px;color:var(--ink);cursor:pointer;}

        /* MAP LAYOUT */
        .map-wrapper{flex:1;display:flex;overflow:hidden;}
        .map-sidebar{width:300px;flex-shrink:0;background:var(--warm);border-right:1px solid var(--smoke);display:flex;flex-direction:column;overflow:hidden;}
        .sidebar-head{padding:24px 20px;background:var(--ink);color:#fff;}
        .sidebar-head h1{font-family:var(--serif);font-size:28px;color:#fff;line-height:1;margin:0 0 8px;}
        .sidebar-head p{font-size:12px;color:rgba(255,255,255,0.5);text-transform:uppercase;letter-spacing:.2em;margin:0;}

        /* FLOOR TABS */
        .floor-tabs{display:flex;background:rgba(26,26,46,0.9);}
        .floor-tabs .nav-tabs{display:flex!important;border:none!important;margin:0!important;width:100%;}
        .floor-tabs .nav-tabs>li{flex:1;margin:0!important;}
        .floor-tabs .nav-tabs>li>a{display:block!important;width:100%!important;text-align:center!important;font-family:var(--sans)!important;font-size:9px!important;font-weight:700!important;letter-spacing:.25em!important;text-transform:uppercase!important;color:rgba(255,255,255,0.5)!important;background:transparent!important;border:none!important;cursor:pointer!important;padding:14px 8px!important;transition:color .3s,background .3s!important;margin:0!important;border-radius:0!important;}
        .floor-tabs .nav-tabs>li>a:hover{color:#fff!important;}
        .floor-tabs .nav-tabs>li.active>a{color:#fff!important;background:rgba(255,255,255,0.08)!important;}

        /* SIDEBAR FILTERS */
        .sidebar-filters{padding:12px;border-bottom:1px solid var(--smoke);}
        .sidebar-filters select,.sidebar-filters .giroComercial{width:100%;font-family:var(--sans);font-size:12px;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--grey);background:var(--smoke);border:1px solid #e5e5e5;border-radius:8px;padding:12px 16px;outline:none;cursor:pointer;appearance:none;transition:border-color .25s;}
        .sidebar-filters select:hover,.sidebar-filters .giroComercial:hover{border-color:var(--purple);}

        /* STORE LIST — generado por backend listadoLocatarios.php */
        .store-list{flex:1;overflow-y:auto;padding:0;-webkit-overflow-scrolling:touch;}
        .store-list::-webkit-scrollbar{width:3px;}.store-list::-webkit-scrollbar-track{background:var(--smoke);}.store-list::-webkit-scrollbar-thumb{background:var(--silver);}

        /*
         * BACKEND COMPAT: locatariosMapa() genera items con class="local"
         * Los links tienen IDs como "Dlocal1PlantaBaja"
         */
        .store-list .local,.store-list-item{display:flex;align-items:center;gap:16px;padding:14px 20px;cursor:pointer;border-bottom:1px solid #f0f0f0;background:var(--warm);transition:background .25s,padding-left .25s;text-decoration:none;position:relative;font-size:13px;color:var(--mid);}
        .store-list .local::before,.store-list-item::before{content:'';position:absolute;left:0;top:0;bottom:0;width:0;background:var(--purple);transition:width .25s;}
        .store-list .local:hover,.store-list-item:hover,.store-list .local.highlighted{background:#f9f5ff;padding-left:28px;}
        .store-list .local:hover::before,.store-list-item:hover::before,.store-list .local.highlighted::before{width:4px;}

        /* MAP CANVAS */
        .map-canvas{flex:1;position:relative;background:var(--smoke);overflow:hidden;}
        .map-inner{width:100%;height:100%;position:relative;}

        /* SVG container */
        #mapa,.tab-content{width:100%;height:100%;}
        .tab-content .tab-pane{height:100%;}
        #mapa svg,.map-svg-container svg{width:100%;height:100%;max-height:100%;}

        /* Simbología */
        .simbologia-bar{position:absolute;bottom:0;left:0;right:0;background:rgba(255,255,255,0.95);backdrop-filter:blur(8px);border-top:1px solid #eee;padding:10px 24px;display:flex;align-items:center;justify-content:center;gap:24px;z-index:5;}
        .simbologia-bar span{font-size:10px;color:var(--purple);font-weight:700;text-transform:uppercase;letter-spacing:.1em;display:flex;align-items:center;gap:6px;}

        @media(max-width:768px){
            *,*::before,*::after{cursor:auto!important;}a,button,select{cursor:pointer!important;}
            #nav{padding:0 16px;height:72px;}.nav-links{display:none;}.nav-ham{display:flex;min-width:44px;min-height:44px;align-items:center;justify-content:center;}
            .map-wrapper{flex-direction:column;}body{overflow:auto;}
            .map-sidebar{width:100%;max-height:none;height:auto;border-right:none;border-bottom:1px solid var(--smoke);flex-shrink:0;}
            .sidebar-head{padding:16px;}.sidebar-head h1{font-size:24px;}
            .floor-tabs .nav-tabs>li>a{padding:12px 8px!important;min-height:44px!important;font-size:10px!important;}
            .sidebar-filters select{font-size:16px;padding:12px 16px;min-height:44px;}
            .store-list{max-height:200px;}
            .map-canvas{min-height:50vh;flex:1;}
            .simbologia-bar{position:relative;gap:12px;padding:8px 12px;flex-wrap:wrap;}
            .mob-close{min-width:44px;min-height:44px;}#mob-menu a{padding:8px 0;min-height:48px;display:flex;align-items:center;justify-content:center;}
        }
        :focus-visible{outline:2px solid var(--purple);outline-offset:3px;}
    </style>
</head>
<body>

    <!-- NAV -->
    <nav id="nav">
        <a href="index.php" class="nav-logo">
            <img src="logos/logo.png" alt="<?php echo $nombrePlaza; ?>">
            <div class="nav-logo-text">
                <span>PLAZA</span>
                <span>UNIVERSIDAD</span>
            </div>
        </a>
        <div class="nav-links">
            <a href="index.php">Inicio</a>
            <a href="directorio.php">Directorio</a>
            <a href="mapa.php" class="active">Mapa</a>
            <a href="eventosypromociones.php">Eventos</a>
            <a href="contacto.php" class="nav-cta">Contacto</a>
        </div>
        <button class="nav-ham" onclick="toggleMob()" aria-label="Abrir menú" aria-expanded="false"><span></span><span></span><span></span></button>
    </nav>
    <div id="mob-menu">
        <button class="mob-close" onclick="toggleMob()" aria-label="Cerrar menú">&times;</button>
        <a href="index.php">Inicio</a>
        <a href="directorio.php">Directorio</a>
        <a href="mapa.php" class="active-mob">Mapa</a>
        <a href="eventosypromociones.php">Eventos</a>
        <a href="contacto.php">Contacto</a>
    </div>

    <main id="main-content">
    <div class="map-wrapper">

        <!-- SIDEBAR -->
        <aside class="map-sidebar">
            <div class="sidebar-head">
                <h1>Mapa</h1>
                <p>Ubica tu tienda favorita</p>
            </div>

            <!-- PISOS: tabs Bootstrap 3 (compatibles con backend) -->
            <div class="floor-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#tab_pb" data-toggle="tab" data-piso="Planta Baja">PB</a></li>
                    <li><a href="#tab_mz" data-toggle="tab" data-piso="Mezzanine">Mezzanine</a></li>
                    <li><a href="#tab_st" data-toggle="tab" data-piso="Sótano">Sótano</a></li>
                </ul>
            </div>

            <!-- FILTRO: giroComercial() del backend -->
            <div class="sidebar-filters">
                <?php echo giroComercial($CentroComercial); ?>
            </div>

            <!-- LISTA DE LOCATARIOS: generada por el backend vía AJAX -->
            <div class="store-list" id="PlantaBaja">
                <?php
                    // Se carga via AJAX al inicio y al cambiar piso/filtro
                ?>
            </div>
            <div class="store-list" id="Mezzanine" style="display:none;">
            </div>
            <div class="store-list" id="Sotano" style="display:none;">
            </div>
        </aside>

        <!-- MAPA: SVG inyectado por INCARSO -->
        <div class="map-canvas">
            <div class="map-inner">
                <div class="tab-content" id="tabContent">

                    <!-- PLANTA BAJA -->
                    <div class="tab-pane active in" id="tab_pb">
                        <div id="mapa" class="map-svg-container" style="margin:0 auto;width:100%;height:100%;">
                            <!--
                                INCARSO: Inyectar aquí el SVG de Planta Baja
                                con polígonos class="localP" e IDs "1PlantaBaja", "2PlantaBaja", etc.
                                Locales: 1-79
                                Anclas: Sears(2), Sanborns(4), DAX(58), YAK(62), Mixup(63)
                            -->
                        </div>
                    </div>

                    <!-- MEZZANINE -->
                    <div class="tab-pane" id="tab_mz">
                        <div id="mapaMezzanine" class="map-svg-container" style="margin:0 auto;width:100%;height:100%;">
                            <!--
                                INCARSO: Inyectar aquí el SVG de Mezzanine
                                Polígonos: Cinépolis(1), Local 3, Sears(2), Vestíbulo
                            -->
                        </div>
                    </div>

                    <!-- SÓTANO -->
                    <div class="tab-pane" id="tab_st">
                        <div id="mapaSotano" class="map-svg-container" style="margin:0 auto;width:100%;height:100%;">
                            <!--
                                INCARSO: Inyectar aquí el SVG de Sótano
                                Polígonos: locales 80-87, Sears(2)
                            -->
                        </div>
                    </div>

                </div>
            </div>

            <!-- Simbología -->
            <div class="simbologia-bar">
                <span><i class="fa fa-square-full" style="font-size:8px;"></i> Elevador</span>
                <span><i class="fa fa-square-full" style="font-size:8px;"></i> Administración</span>
                <span><i class="fa fa-square-full" style="font-size:8px;"></i> Escaleras</span>
                <span><i class="fa fa-square-full" style="font-size:8px;"></i> Sanitarios</span>
            </div>
        </div>

    </div>
    </main>

    <?php include("modales.php"); ?>

    <script>
        function toggleMob(){var m=document.getElementById('mob-menu');m.classList.toggle('open');document.body.style.overflow=m.classList.contains('open')?'hidden':'';var b=document.querySelector('.nav-ham');if(b) b.setAttribute('aria-expanded',m.classList.contains('open'));}

        $(document).ready(function(){

            /* Click en locatario de la lista → abre modal */
            $(document).on('click','.local',function(e){
                var _href=this.href;
                e.preventDefault();
                $('#miModalContenidoLocatario').load(_href,function(){
                    $('#miModalLocatario').modal('show');
                });
                return false;
            });

            /* Hover sobre locatario lista → resalta SVG */
            $(document).on('mouseenter','.local',function(){
                var id=$(this).attr('id');
                if(id){
                    var idMapa=id.replace('D','');
                    var color=$('#'+idMapa).css('fill');
                    $('#'+idMapa).css('fill-opacity','.5');
                    $('#'+id).css({'background':color,'font-weight':'bold','color':'white'});
                }
            });
            $(document).on('mouseleave','.local',function(){
                var id=$(this).attr('id');
                if(id){
                    var idMapa=id.replace('D','');
                    $('#'+idMapa).css('fill-opacity','1');
                    $('#'+id).css({'background':'none','font-weight':'normal','color':'black'});
                }
            });

            /* Click en polígono SVG → abre modal de locatario */
            $(document).on('click','.localP',function(){
                var id=$(this).attr('id');
                id=id.replace('PlantaBaja','').replace('Mezzanine','').replace('Sotano','');
                var centroComercial=<?php echo $CentroComercial; ?>;
                $('#miModalContenidoLocatario').load('locatarioModal.php?CentroComercial='+centroComercial+'&idCatLocatario='+id+'&origen=mapa',function(){
                    $('#miModalLocatario').modal('show');
                });
                return false;
            });

            /* Hover sobre polígono SVG → resalta en lista */
            $(document).on('mouseenter','.localP',function(){
                var id=$(this).attr('id');
                var color=$('#local'+id).css('fill');
                $('#local'+id).css('fill-opacity','.5');
                $('#Dlocal'+id).css({'background':color,'font-weight':'bold','color':'white'});
            });
            $(document).on('mouseleave','.localP',function(){
                var id=$(this).attr('id');
                $('#local'+id).css('fill-opacity','1');
                $('#Dlocal'+id).css({'background':'none','font-weight':'normal','color':'black'});
            });

            /* Filtro por giro comercial → actualiza listas via AJAX */
            $(document).on('change','.giroComercial',function(){
                var giroComercial=$(this).val();
                var cc=<?php echo $CentroComercial; ?>;
                $.ajax({url:'listadoLocatarios.php',type:'POST',data:{centroComercial:cc,giroComercial:giroComercial,piso:'Planta Baja'},cache:false,success:function(data){$('#PlantaBaja').html(data);}});
                $.ajax({url:'listadoLocatarios.php',type:'POST',data:{centroComercial:cc,giroComercial:giroComercial,piso:'Mezzanine'},cache:false,success:function(data){$('#Mezzanine').html(data);}});
                $.ajax({url:'listadoLocatarios.php',type:'POST',data:{centroComercial:cc,giroComercial:giroComercial,piso:'Sótano'},cache:false,success:function(data){$('#Sotano').html(data);}});
            });

            /* Al cambiar tab de piso → cargar locatarios via AJAX + mostrar/ocultar listas */
            $('a[data-toggle="tab"]').on('shown.bs.tab',function(e){
                var piso=$(e.target).data('piso');
                var targetDiv;
                if(piso==='Planta Baja') targetDiv='#PlantaBaja';
                else if(piso==='Mezzanine') targetDiv='#Mezzanine';
                else targetDiv='#Sotano';

                // Mostrar/ocultar listas
                $('.store-list').hide();
                $(targetDiv).show();

                var cc=<?php echo $CentroComercial; ?>;
                var giroComercial=$('.giroComercial').val()||'';
                $.ajax({url:'listadoLocatarios.php',type:'POST',data:{centroComercial:cc,giroComercial:giroComercial,piso:piso},cache:false,success:function(data){$(targetDiv).html(data);}});
            });

            /* Cargar Planta Baja al inicio */
            $.ajax({
                url:'listadoLocatarios.php',
                type:'POST',
                data:{centroComercial:<?php echo $CentroComercial; ?>,giroComercial:'',piso:'Planta Baja'},
                cache:false,
                success:function(data){$('#PlantaBaja').html(data);}
            });

            /* Cerrar modal */
            $(document).on('click','#cerrar',function(){$(this).closest('.modal').modal('hide');});
        });
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "<?php echo $nombrePlaza; ?>", "item": "index.php"},
            {"@type": "ListItem", "position": 2, "name": "Mapa", "item": "mapa.php"}
        ]
    }
    </script>
</body>
</html>
