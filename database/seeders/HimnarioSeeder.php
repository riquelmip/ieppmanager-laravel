<?php

namespace Database\Seeders;

use App\Models\Alabanza;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HimnarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $himnario = '{
            "RECORDS": [
              {
                "idalabanza": 1,
                "numhimnario": 1,
                "nombre": "Al Señor yo le quiero servir",
                "alabanza": "<div>1</div> <div>Al Se&ntilde;or yo le quiero servir,</div> <div>porque se que me puede salvar,</div> <div>pues promete llevarme a vivir,</div> <div>donde siempre le pueda mirar.</div> <div>&nbsp;</div> <div><strong>CORO</strong></div> <div>He peleado la batalla Se&ntilde;or,</div> <div>le dir&eacute; mi carrera al terminar,</div> <div>y tambi&eacute;n he guardado la fe,</div> <div>solo espero me vengas a llevar.</div> <div>&nbsp;</div> <div>2</div> <div>La corona de justicia ya est&aacute;,</div> <div>preparada al que lucha hasta el fin.</div> <div>El Se&ntilde;or Justo Juez nos dar&aacute;</div> <div>en el d&iacute;a que tenga que venir.</div> <div>&nbsp;</div> <div>3</div> <div>Todo lo que tendr&eacute; que sufrir,</div> <div>esto no se podr&aacute; comparar,</div> <div>con la gloria que Cristo al venir,</div> <div>a su pueblo le tenga que dar.</div> <div>&nbsp;</div> <div>4</div> <div>La corona de justicia ya est&aacute;,</div> <div>preparada al que lucha hasta el fin.</div> <div>El Se&ntilde;or justo juez no dar&aacute;,</div> <div>en el d&iacute;a que tenga que venir.</div>"
              },
              {
                "idalabanza": 2,
                "numhimnario": 2,
                "nombre": "Abierta esta la puerta",
                "alabanza": "<div>1</div> <div>Abierta esta la puerta de la redenci&oacute;n</div> <div>Quien quiera entrar recibir&aacute; perd&oacute;n;</div> <div>Quien abre para cristo hoy su coraz&oacute;n</div> <div>Dios le dar&aacute; tambi&eacute;n la salvaci&oacute;n</div> <div>&nbsp;</div> <div><strong>CORO</strong></div> <div>Ven, ahora, si ven pecador</div> <div>Acepta a cristo el Rey, &Eacute;l es tu Salvador</div> <div>En la cruenta cruz muri&oacute; en tu favor</div> <div>All&iacute; pago tu deuda con infinito amor.</div> <div>&nbsp;</div> <div>2</div> <div>Marcado est&aacute; el camino &iquest;Qu&eacute; m&aacute;s puedes hacer?</div> <div>Solamente confiar en cristo y su poder.</div> <div>Hoy puedes aceptarle y a El obedecer</div> <div>la vida eterna t&uacute; quieres hoy tener.</div> <div>&nbsp;</div> <div>3</div> <div>Abierta esta la puerta puedes entrar</div> <div>Es cristo quien te llama. &Eacute;l te quiere salvar</div> <div>Si las bellas mansiones vas a despreciar</div> <div>En el tormento eterno te vas a lamentar.</div>"
              },
              {
                "idalabanza": 3,
                "numhimnario": 3,
                "nombre": "A Jesucristo ven sin tardar",
                "alabanza": "<div>1</div> <div>A Jesucristo ven sin tardar</div> <div>que entre nosotros hoy &eacute;l est&aacute;</div> <div>y te convida con dulce af&aacute;n</div> <div>tierno diciendo: Ven.</div> <div>&nbsp;</div> <div><strong>CORO</strong></div> <div>&iexcl;Oh! cu&aacute;n grata es nuestra reuni&oacute;n</div> <div>cuando all&aacute;, Se&ntilde;or, en tu mansi&oacute;n</div> <div>contigo estemos en comuni&oacute;n</div> <div>gozando eterno bien.</div> <div>&nbsp;</div> <div>2</div> <div>Piensa que &eacute;l s&oacute;lo puede colmar</div> <div>tu triste pecho de gozo y paz;</div> <div>y porque anhela tu bienestar</div> <div>vuelve a decirte: Ven.</div> <div>&nbsp;</div> <div>3</div> <div>Su voz escucha sin vacilar</div> <div>y grato acepta lo que hoy te da.</div> <div>Tal vez ma&ntilde;ana no habr&aacute; lugar</div> <div>no te detengas, ven.</div>"
              },
              {
                "idalabanza": 4,
                "numhimnario": 4,
                "nombre": "A la victoria Jesús nos llama",
                "alabanza": "<div>1</div> <div>A la victoria Jes&uacute;s nos llama</div> <div>va con nosotros el Capit&aacute;n.</div> <div>//Marchemos pues a combatir</div> <div>a los ej&eacute;rcitos de Sat&aacute;n.//</div> <div>&nbsp;</div> <div><strong>CORO </strong></div> <div>A la victoria Jes&uacute;s nos llama</div> <div>nos llama a todos los de su grey.</div> <div>//Hay que triunfar contra el mal</div> <div>que con nosotros va nuestro rey.//</div> <div>&nbsp;</div> <div>2</div> <div>A la victoria Jes&uacute;s nos llama</div> <div>sin detenernos, sin ir atr&aacute;s.</div> <div>//Hasta triunfar, hasta vencer</div> <div>las fieras huestes de satan&aacute;s.//</div> <div>&nbsp;</div> <div>3</div> <div>A la victoria Jes&uacute;s nos llama</div> <div>ya los clarines sonando est&aacute;n.</div> <div>//Pues al vencer contra el mal</div> <div>los mismos cielos se alegrar&aacute;n.//</div>"
              },
              {
                "idalabanza": 5,
                "numhimnario": 5,
                "nombre": "Al Calvario",
                "alabanza": "<div>1</div> <div>Al Calvario, solo, Jes&uacute;s ascendi&oacute;</div> <div>Llevando pesada cruz</div> <div>Y al morir en ella al mortal dej&oacute;</div> <div>Un fanal de gloriosa luz.</div> <div>&nbsp;</div> <div><strong>CORO </strong></div> <div>//Su luz s&oacute;lo me guiar&aacute;//</div> <div>A mi hogar de paz y eterno amor&hellip;</div> <div>Su luz s&oacute;lo me guiar&aacute;.</div> <div>&nbsp;</div> <div>2</div> <div>En la cruz el alma tan s&oacute;lo hallar&aacute;</div> <div>La fuente de inspiraci&oacute;n</div> <div>Nada grande y digno en el mundo habr&aacute;</div> <div>Que en la cruz no halle aprobaci&oacute;n.</div> <div>&nbsp;</div> <div>3</div> <div>Yo por ella voy a m&iacute; hogar celestial</div> <div>Mi rumbo marcando est&aacute;</div> <div>En mi oscura vida ser&aacute; el fanal</div> <div>Y a su luz mi alma siempre ir&aacute;.</div>"
              },
              {
                "idalabanza": 8,
                "numhimnario": 6,
                "nombre": "Al contemplar la excelsa cruz",
                "alabanza": "<div>1</div> <div>Al contemplar la excelsa cruz</div> <div>Do cristo el Rey por mi muri&oacute;</div> <div>Mis goces, pompas y vanidad</div> <div>Con gran desprecio miro yo.</div> <div>&nbsp;</div> <div><strong> CORO </strong></div> <div>Solo en la muerte del se&ntilde;or</div> <div>Jes&uacute;s, mi Dios de gloriare;</div> <div>&ldquo;las vanas cosas que hay aqu&iacute;</div> <div>Por el gozo dejare&rdquo;.</div> <div>&nbsp;</div> <div>2</div> <div>Ce&ntilde;ido de corona cruel</div> <div>Paciente sufre el Salvador</div> <div>De su cabeza hasta sus pies</div> <div>Fluye raudal de tierno amor.</div> <div>&nbsp;</div> <div>3</div> <div>Es para m&iacute; su gran amor</div> <div>M&aacute;s que tesoro terrenal</div> <div>Mi vida entera al Salvador</div> <div>Por eso quiero consagrar.</div>"
              },
              {
                "idalabanza": 21,
                "numhimnario": 7,
                "nombre": "Al cordero dad loor",
                "alabanza": "<div>1</div> <div>El mensaje yo cre&iacute;, al Cordero dad loor</div> <div>Y el atrio ya pas&eacute;, Oh gloria al Se&ntilde;or</div> <div>Yo con Cristo todo estoy en la Senda angosta voy</div> <div>Al pecado muerto estoy, al Cordero dad loor.</div> <div>&nbsp;</div> <div><strong>CORO</strong></div> <div>Aleluya, Aleluya</div> <div>Por el velo ya pase</div> <div>Y en la gloria me encontr&eacute;</div> <div>Aleluya, Aleluya</div> <div>Vivo yo en presencia de mi Rey.</div> <div>&nbsp;</div> <div>2</div> <div>Siervo soy del Padre Dios. Al cordero dad loor</div> <div>Siempre escuchare su voz, Oh, gloria al Se&ntilde;or.</div> <div>Por su sangre carmes&iacute;, El parti&oacute; el velo all&iacute;</div> <div>Hizo el nuevo pacto as&iacute;, a cordero dad loor</div> <div>&nbsp;</div> <div>3</div> <div>Bien confiada esta mi fe, al cordero dad loor</div> <div>Que a su trono llegare, Oh gloria al Se&ntilde;or</div> <div>Y all&iacute; mi petici&oacute;n, Gozara su aceptaci&oacute;n</div> <div>Y tendr&eacute; bendici&oacute;n, Al cordero dad loor.</div>"
              },
              {
                "idalabanza": 27,
                "numhimnario": 8,
                "nombre": "A los campos que son blancos",
                "alabanza": "<div>1</div> <div>A los campos que son blancos para la mies</div> <div>A los que nunca se predic&oacute;</div> <div>La palabra de Dios buenas nuevas de paz</div> <div>Ya me voy, pues Jes&uacute;s me mand&oacute;.</div> <div>&nbsp;</div> <div><strong>CORO </strong></div> <div>A los campos me voy a sembrar y a segar</div> <div>Con amor y valor, fiel he de trabajar.</div> <div>&nbsp;</div> <div>2</div> <div>Muchos hay que no saben de cristo Jes&uacute;s</div> <div>Agobiados viven en dolor.</div> <div>Ya me voy a mostrarles de Dios grata luz</div> <div>Y contarles de su gran amor.</div> <div>&nbsp;</div> <div>3</div> <div>A los campos m&aacute;s duros me llama a ir</div> <div>Y su voz siempre quiero escuchar:</div> <div>Por mi a la cruz fue Jes&uacute;s a morir</div> <div>Y por el todo quiero dejar.</div>"
              },
              {
                "idalabanza": 28,
                "numhimnario": 9,
                "nombre": "A mi supremo Rey",
                "alabanza": "<div>1</div> <div>Anhelo en las regias mansiones morar</div> <div>Do reina mi Salvador</div> <div>Escucho los ecos del dulce cantar</div> <div>De triunfo y de gran loor.</div> <div>&nbsp;</div> <div><strong>CORO </strong></div> <div>A mi supremo Rey alegre cantare</div> <div>Mis ojos han de ver la playa celestial</div> <div>Feliz y salvo voy y caminando voy</div> <div>Con j&uacute;bilo a mi eterno hogar.</div> <div>&nbsp;</div> <div>2</div> <div>Gloriosa esperanza e inefable paz</div> <div>Yo siento en mi coraz&oacute;n</div> <div>Cuan dulce es tener comuni&oacute;n y solaz</div> <div>Con Dios en adoraci&oacute;n.</div>"
              },
              {
                "idalabanza": 29,
                "numhimnario": 10,
                "nombre": "Amor maternal",
                "alabanza": "<div>1</div> <div>Los a&ntilde;os de mi infancia me recuerdan con dolor</div> <div>que a veces despreciaba de mi madre el tierno amor;</div> <div>mas ya que est&aacute; en el cielo, anhelo su solicitud</div> <div>dile, &iexcl;Oh, Se&ntilde;or! Que en gloria la ver&eacute;.</div> <div>&nbsp;</div> <div><strong>CORO </strong></div> <div>&iexcl;Oh, madre de mi amor! En gloria te ver&eacute;</div> <div>Tu tierno amor jam&aacute;s olvidar&eacute;;</div> <div>En la mansi&oacute;n de paz, ver&eacute; tu dulce faz</div> <div>Y junto a ti por los siglos morar&eacute;.</div> <div>&nbsp;</div> <div>2</div> <div>Por m&aacute;s que anduve errante yo por sendas de maldad</div> <div>Mi cari&ntilde;osa madre me trataba con bondad;</div> <div>Mis cuitas infantiles endulzaba con amor</div> <div>Dile, &iexcl;Oh, Se&ntilde;or! Que en gloria la ver&eacute;.</div> <div>&nbsp;</div> <div>3</div> <div>Al verme solo y lejos de mi hogar, mi dulce hogar</div> <div>Con su angustiado coraz&oacute;n lloraba sin cesar</div> <div>Y d&iacute;a y noche oraba a Dios por m&iacute; con grande fe;</div> <div>Dile &iexcl;Oh, Se&ntilde;or! Que en gloria la ver&eacute;.</div> <div>&nbsp;</div> <div>4</div> <div>Infausta nueva un d&iacute;a lleg&oacute; diciendo:</div> <div>&ldquo;Ven si quieres a tu madre ver, que hoy vuela al Ed&eacute;n&rdquo;.</div> <div>Llor&eacute;, cuando en los brazos de la muerte la encontr&eacute;</div> <div>Y dije: &ldquo;&iexcl;Oh, madre, en gloria te ver&eacute;!&rdquo;.</div>"
              },
              {
                "idalabanza": 30,
                "numhimnario": 11,
                "nombre": "Años mi alma en vanidad vivió",
                "alabanza": "<div>1</div> <div>A&ntilde;os mi alma en vanidad vivi&oacute;</div> <div>Ignorando a quien por m&iacute; sufri&oacute;</div> <div>Oh que en el Calvario sucumbi&oacute;</div> <div>El Salvador.</div> <div>&nbsp;</div> <div><strong>CORO</strong></div> <div>Mi alma all&iacute; divina gracia hall&oacute;</div> <div>Dios all&iacute; perd&oacute;n y paz me dio.</div> <div>Del pecado all&iacute; me liberto</div> <div>El Salvador.</div> <div>&nbsp;</div> <div>2</div> <div>Por la Biblia miro que pequ&eacute;</div> <div>Y su ley divina quebrant&eacute;</div> <div>Mi alma entonces contempl&oacute; con fe</div> <div>Al Salvador.</div> <div>&nbsp;</div> <div>3</div> <div>Toda mi alma a Cristo ya entregu&eacute;</div> <div>Hoy le quiero y sirvo como a rey</div> <div>Por los siglos siempre cantar&eacute;</div> <div>Al Salvador.</div> <div>&nbsp;</div> <div>4</div> <div>En la cruz su amor Dios demostr&oacute;</div> <div>Y de gracia al hombre revisti&oacute;</div> <div>Cuando por nosotros se entreg&oacute;</div> <div>El Salvador.</div> <div>&nbsp;</div>"
              },
              {
                "idalabanza": 31,
                "numhimnario": 12,
                "nombre": "¿A quien iré?",
                "alabanza": "<div>1</div> <div>En este mundo lleno de dolor</div> <div>rodeado estoy de pruebas mil</div> <div>soy incapaz de lidiar con Satan&aacute;s</div> <div>en esta lucha tan hostil.</div> <div>♪&nbsp;</div> <div><strong>CORO&nbsp;</strong></div> <div>&iquest;A quien ir&eacute;?&iquest;A qui&eacute;n ir&eacute;?</div> <div>&iquest;A qui&eacute;n? si no a Jes&uacute;s</div> <div>El me salv&oacute;, mi alma transform&oacute;</div> <div>&iquest;a qui&eacute;n ir&eacute;? si no a Jes&uacute;s.</div> <div>♪&nbsp;</div> <div>2&nbsp;</div> <div>Cristo es la vida y &Eacute;l es la verdad.</div> <div>Mi gozo es caminar con El</div> <div>Cristo es el &uacute;nico camino a Dios</div> <div>A mi m&aacute;s dulce es que la miel</div> <div>♪&nbsp;</div> <div>3&nbsp;</div> <div>Hambre y sed en mi alma tengo yo;</div> <div>La satisface mi Jes&uacute;s.</div> <div>Y en ning&uacute;n otro hay salud y paz;</div> <div>Cristo es el pr&iacute;ncipe de la luz.</div> <div>&nbsp;</div>"
              },
              {
                "idalabanza": 32,
                "numhimnario": 13,
                "nombre": "Aunque la tierra tiemble",
                "alabanza": "<div>1</div> <div>Aunque la tierra tiemble</div> <div>Aunque el mar se agite Yo te seguir&eacute;</div> <div>aunque pasen los d&iacute;as y aunque pasen los</div> <div>A&ntilde;os al fin te esperare.</div> <div>&nbsp;</div> <div><strong>CORO</strong></div> <div>Al cielo volar quisiera y si con alas yo pudiera</div> <div>Llegar a ti determinado estoy a seguir</div> <div>Hacia al frente y aunque venga la muerte</div> <div>Al fin te esperare.</div> <div>&nbsp;</div> <div>2</div> <div>Si mis amigos me abandonan si mis padres</div> <div>Me aborrecen yo te seguir&eacute;</div> <div>Si perdiera mis riquezas y quedara en la</div> <div>Miseria al fin te esperare.</div> <div>&nbsp;</div>"
              },
              {
                "idalabanza": 33,
                "numhimnario": 14,
                "nombre": "Aquella tumba vacía",
                "alabanza": "<div>1</div> <div>Por una tumba vac&iacute;a y un Cristo resucitado</div> <div>A vivir en esta vida estoy determinado;</div> <div>Para decir lo que siento, llevo razones conmigo</div> <div>Mis pecados con su sangre, Los borro mi buen amigo.</div> <div>&nbsp;</div> <div><strong>CORO </strong></div> <div>Oh muerte yo ser&eacute; tu muerte, sepulcro yo tu aguij&oacute;n.</div> <div>Jerusal&eacute;n fue testigo, cuando la tumba se abri&oacute;</div> <div>&nbsp;</div> <div>2</div> <div>Aquella tumba vac&iacute;a, abri&oacute; un sendero divino</div> <div>Adorar al Rey de Reyes, ser&aacute; siempre mi destino.</div> <div>Regresare de donde vine, para mi es mejor si muero</div> <div>En las buenas y en las malas mi Jes&uacute;s ser&aacute; primero.</div>"
              },
              {
                "idalabanza": 34,
                "numhimnario": 15,
                "nombre": "Agua cristalina",
                "alabanza": "<div>1</div> <div>El mundo es un desierto</div> <div>Que agua para el alma no puede producir</div> <div>Y en ese desierto mi alma transitaba</div> <div>Muri&eacute;ndose de sed.</div> <div>&nbsp;</div> <div><strong>CORO</strong></div> <div>El agua cristalina</div> <div>El agua que me diste Jes&uacute;s, yo la tom&eacute;.</div> <div>Y desde ese momento Has transformado Mi alma</div> <div>Y ahora soy feliz.</div> <div>&nbsp;</div> <div>2</div> <div>Se ha calmado el ansia y deseo del mundo</div> <div>Ya sed nunca tendr&eacute;</div> <div>Mi alma est&aacute; bebiendo del agua de la vida</div> <div>Y el agua es mi Jes&uacute;s.</div> <div>&nbsp;</div> <div>3</div> <div>Ahora s&oacute;lo veo la gloria all&aacute; en el cielo</div> <div>Donde voy a vivir</div> <div>Tomando de mi Cristo el agua de la vida</div> <div>Qu&eacute; m&aacute;s puede faltar.</div>"
              },
              {
                "idalabanza": 35,
                "numhimnario": 16,
                "nombre": "A la casa de Jairo",
                "alabanza": "<div>1</div> <div>A la casa de Jairo iba Jes&uacute;s</div> <div>una grande multitud iba tras &eacute;l;</div> <div>una pobre mujer llena de fe</div> <div>no mir&oacute; la multitud fue y le toc&oacute;.</div> <div>&nbsp;</div> <div><strong> CORO</strong></div> <div>Has t&uacute; cual la mujer que fue y toc&oacute;</div> <div>El borde del vestido del Se&ntilde;or;</div> <div>virtud sali&oacute; de &eacute;l, y ella san&oacute;;</div> <div>y si le tocas t&uacute; sanas tambi&eacute;n.</div> <div>&nbsp;</div> <div>2</div> <div>Aquel Pueblo era grande y numeroso</div> <div>una parte cre&iacute;a en el Se&ntilde;or</div> <div>pero el resto, de enemigos y curiosos</div> <div>hoy en d&iacute;a los encuentras aun peor.</div> <div>&nbsp;</div> <div>3</div> <div>Yo fui quien te toc&oacute;, &iexcl;Oh! mi buen Jes&uacute;s</div> <div>Mi mal ning&uacute;n doctor pudo sanar;</div> <div>Tu fama lleg&oacute; a m&iacute;, y vine a ti</div> <div>Y ya sanada estoy, &iexcl;Perd&oacute;name!</div>"
              },
              {
                "idalabanza": 36,
                "numhimnario": 17,
                "nombre": "Agradecimiento",
                "alabanza": "<div>1</div> <div>Al meditar Dios m&iacute;o en las cosas que me has dado</div> <div>mi coraz&oacute;n se inflama turbado de emoci&oacute;n</div> <div>pues no encuentro palabras con que expresar mi Cristo</div> <div>el agradecimiento de mi alma para ti.</div> <div>&nbsp;</div> <div>2</div> <div>Cambiaste tu mi vida, me has dado esperanza</div> <div>y desde ese momento mi alma recibi&oacute;</div> <div>un gozo tan sublime que al paso de los a&ntilde;os</div> <div>ha sido cual la fuente de mi felicidad.</div> <div>&nbsp;</div> <div><strong>CORO</strong></div> <div>Agradecimiento, hay en mi coraz&oacute;n</div> <div>Cantos de alegr&iacute;a elevo con mi voz</div> <div>muchas son las cosas, que mi Dios me ha dado</div> <div>//y en agradecimiento le sirvo a mi Se&ntilde;or//.</div> <div>&nbsp;</div> <div>3</div> <div>A veces que la prueba has puesto en mi camino</div> <div>en vez de ser derrota han sido bendici&oacute;n</div> <div>pues ni por un instante t&uacute; me has dejado solo</div> <div>y as&iacute; tu santa mano ha sido mi sost&eacute;n.</div> <div>&nbsp;</div> <div>4</div> <div>Permite que mi vida yo ponga por servirte</div> <div>y que dentro de mi mente presente siempre este.</div> <div>Tus m&uacute;ltiples favores y tus misericordias</div> <div>Que aun sin merecerlas has tenido para m&iacute;.</div>"
              },
              {
                "idalabanza": 37,
                "numhimnario": 18,
                "nombre": "Así era mi vida",
                "alabanza": "<div>1</div> <div>Una llaga podrida era mi vida</div> <div>y tirada en la basura, tu me encontraste;</div> <div>y me diste tu mano y me levantaste</div> <div>para curar mis heridas, que con amor me sanaste.</div> <div>&nbsp;</div> <div>2</div> <div>Que mal agradecido fueras tu</div> <div>si a mi Cristo dejaras;</div> <div>y que cobarde fuera yo;</div> <div>si de aqu&iacute; me regresara;</div> <div>estoy a medio camino de la jornada</div> <div>para llegar a Cana&aacute;n, donde ser&aacute; mi morada.</div> <div>&nbsp;</div> <div>3</div> <div>Perdona Se&ntilde;or Jesucristo, fui desobediente</div> <div>y quisiera expresarte mi canto</div> <div>lo que mi alma siente;</div> <div>quisiera decirles que sanas, a toda la gente</div> <div>y que has transformado mi vida y ahora soy diferente.</div>"
              },
              {
                "idalabanza": 38,
                "numhimnario": 19,
                "nombre": "Amigo como Cristo",
                "alabanza": "<div>1</div> <div>Amigo como Cristo yo no encuentro</div> <div>&eacute;l pudo comprender mi coraz&oacute;n</div> <div>es bueno, comprensivo y amoroso</div> <div>en &eacute;l yo he encontrado mi coraz&oacute;n.</div> <div>&nbsp;</div> <div><strong>CORO </strong></div> <div>Tu sabes cuando estoy desalentado</div> <div>tu sabes, comprender mi condici&oacute;n</div> <div>Se&ntilde;or, tu ya sanaste mis heridas</div> <div>por algo viviremos en tu amor.</div> <div>&nbsp;</div> <div>2</div> <div>Que senda tan hermosa que marcaste</div> <div>andaba yo perdido en la maldad;</div> <div>yo nunca me cre&iacute;a ser tan dichoso</div> <div>alabo tu hermosura y verdad.</div> <div>&nbsp;</div> <div>3</div> <div>De noche cuando voy a descansar</div> <div>inclino mi cabeza en oraci&oacute;n;</div> <div>Jes&uacute;s con ternura y bondad</div> <div>contempla y ve mi sue&ntilde;o con amor.</div>"
              },
              {
                "idalabanza": 39,
                "numhimnario": 20,
                "nombre": "Ayúdame Señor, te ruego",
                "alabanza": "<div>1</div> <div>Yo quiero llegar al cielo</div> <div>Y estar con mi Salvador;</div> <div>yo quiero tener consuelo y solaz</div> <div>por siempre con mi Se&ntilde;or Jes&uacute;s;</div> <div>estar muy feliz viviendo en su amor</div> <div>y andando en su resplandor.</div> <div>&nbsp;</div> <div><strong>CORO </strong></div> <div>Ay&uacute;dame Se&ntilde;or, te ruego</div> <div>A llegar hasta el final</div> <div>no dejes T&uacute;, que el enemigo</div> <div>Robe mi felicidad.</div> <div>&nbsp;</div> <div>2</div> <div>Quisiera que terminara</div> <div>Esta vida de aflicci&oacute;n,</div> <div>y estar caminando con Cristo mi Rey</div> <div>gozando all&aacute; en su gloriosa mansi&oacute;n;</div> <div>donde nunca habr&aacute; tristeza ni dolor</div> <div>tan solo su santo amor.</div>"
              },
              {
                "idalabanza": 42,
                "numhimnario": 21,
                "nombre": "Banderas de amor",
                "alabanza": "<div>1</div> <div>En mi coraz&oacute;n hay banderas de amor</div> <div>// banderas de amor //</div> <div>en mi coraz&oacute;n hay banderas de amor</div> <div>Pues Cristo ya vive en mi</div> <div>&nbsp;</div> <div>2</div> <div>&Aacute;lzalas m&aacute;s arriba que todos vean</div> <div>//Que todos vean//</div> <div>&aacute;lzalas m&aacute;s arriba que todos vean</div> <div>que Cristo ya vive en mi</div> <div>&nbsp;</div> <div>3</div> <div>El hombre que anduvo en Galilea</div> <div>Se llama Jes&uacute;s de Nazaret</div> <div>Ahora est&aacute; conmigo, hay pruebas en mi vida</div> <div>Y aumentaba cada d&iacute;a m&aacute;s y m&aacute;s mi fe</div> <div>&nbsp;</div> <div>4</div> <div>Fe m&aacute;s fe, amor m&aacute;s amor</div> <div>Y si no lo tienes, pide al salvador</div> <div>Porque amor sin fe, fe sin amor</div> <div>Es imposible agradar a DIOS</div> <div>&nbsp;</div> <div>5</div> <div>De las fuentes de abajo me ha dado</div> <div>De la fuente de arriba tambi&eacute;n</div> <div>El se&ntilde;or a mi vida ha llegado</div> <div>Qu&eacute; glorioso es andar con El</div> <div>&nbsp;</div> <div>6</div> <div>Saciara, saciara, A tu alma</div> <div>Si vienes a El No demores</div> <div>No pierdas m&aacute;s tiempo, ven a El//</div>"
              },
              {
                "idalabanza": 43,
                "numhimnario": 22,
                "nombre": "Bella mansión",
                "alabanza": "<div>1</div> <div>Aunque errante y pobre soy</div> <div>Riquezas de oro no busco aqu&iacute;;</div> <div>Mi Rey es mi Cristo que fue a prepararme</div> <div>De perlas de oro mi eterno hogar.</div> <div>&nbsp;</div> <div><strong> CORO </strong></div> <div>Tengo una hermosa y bella mansi&oacute;n</div> <div>En donde Cristo me espera all&aacute;</div> <div>Y alg&uacute;n d&iacute;a se termina el lloro</div> <div>Y en calles de oro yo andar&eacute;.</div> <div>&nbsp;</div> <div>2</div> <div>Sufriendo mucho se vive aqu&iacute;</div> <div>Como extranjero se vive as&iacute;</div> <div>Pero alg&uacute;n d&iacute;a ver&eacute; a mi Cristo</div> <div>En donde nunca se dice adi&oacute;s.</div> <div>&nbsp;</div> <div>3</div> <div>Solo no ando camina El conmigo</div> <div>Yo vivo alegre y al cielo voy</div> <div>Soy peregrino en busca de hogar</div> <div>Mansi&oacute;n de oro me espera all&aacute;.</div>"
              },
              {
                "idalabanza": 44,
                "numhimnario": 23,
                "nombre": "Bajo del olivar",
                "alabanza": "<div>1</div> <div>Bajo de las estrellas anduvo mi Jes&uacute;s</div> <div>en el jard&iacute;n del Getseman&iacute;.</div> <div>Donde luz no se hall&oacute;, Cristo se arrodill&oacute;</div> <div>cuando or&oacute; bajo del olivar.</div> <div>&nbsp;</div> <div><strong>CORO </strong></div> <div>Bajo del olivar, bajo del olivar</div> <div>fue mi Cristo a solas a orar.</div> <div>Sea tu voluntad, &iexcl;oh Padre Celestial!</div> <div>&Eacute;l clam&oacute; bajo del olivar.</div> <div>&nbsp;</div> <div>2</div> <div>Cuando al Padre &eacute;l or&oacute;, muy triste se qued&oacute;</div> <div>fue amarga la copa que bebi&oacute;;</div> <div>vino un &aacute;ngel del cielo y le confort&oacute;</div> <div>cuando or&oacute; bajo del olivar.</div> <div>&nbsp;</div> <div>3</div> <div>Siempre sea mi canci&oacute;n el amor que mostr&oacute;</div> <div>mi Jes&uacute;s cuando or&oacute; en el jard&iacute;n;</div> <div>gloria sea dada a &eacute;l, mis culpas &eacute;l llev&oacute;</div> <div>cuando or&oacute; bajo del olivar.</div>"
              },
              {
                "idalabanza": 45,
                "numhimnario": 24,
                "nombre": "Bendíceme más y más",
                "alabanza": "<div>1</div> <div>Que gozo incomparable siento en mi coraz&oacute;n</div> <div>En el fondo de mi alma siento la bendici&oacute;n</div> <div>Bend&iacute;ceme m&aacute;s y m&aacute;s bend&iacute;ceme m&aacute;s y m&aacute;s</div> <div>De ti quiero alcanzar bend&iacute;ceme m&aacute;s y m&aacute;s</div> <div>&nbsp;</div> <div>2</div> <div>Yo encuentro en la Biblia palabras del Se&ntilde;or</div> <div>Promete bautizarme con el Consolador</div> <div>Bend&iacute;ceme m&aacute;s y m&aacute;s bend&iacute;ceme m&aacute;s y m&aacute;s</div> <div>De ti quiero alcanzar bend&iacute;ceme m&aacute;s y mas.</div> <div>&nbsp;</div> <div>3</div> <div>Espero ese d&iacute;a de gran felicidad</div> <div>Tener el privilegio y lenguas hablar</div> <div>Bend&iacute;ceme m&aacute;s y m&aacute;s bend&iacute;ceme m&aacute;s y m&aacute;s</div> <div>De ti quiero alcanzar bend&iacute;ceme m&aacute;s y m&aacute;s.</div>"
              },
              {
                "idalabanza": 46,
                "numhimnario": 25,
                "nombre": "Cantaran alabanzas los cielos",
                "alabanza": "<div>1</div> <div>Cantaran alabanzas los cielos</div> <div>cuando suba Jes&uacute;s en las nubes.</div> <div>Con su gloria y su sequito de &aacute;ngeles</div> <div>a llevar a su amada la Iglesia.</div> <div>&nbsp;</div> <div><strong> CORO </strong></div> <div>Yo estar&eacute; muy alegre y en mi coraz&oacute;n cantare</div> <div>Siempre vivas, a mi Salvador gritare</div> <div>//cuando suba dichoso en las nubes//</div> <div>para encontrarle a &eacute;l.</div> <div>&nbsp;</div> <div>2</div> <div>Esperar con af&aacute;n su venida</div> <div>&iexcl;Oh amados de Cristo el Eterno!</div> <div>No vagu&eacute;is como aves peregrinas</div> <div>conoced que se acerca el invierno.</div>"
              },
              {
                "idalabanza": 47,
                "numhimnario": 26,
                "nombre": "Como el ciervo brama",
                "alabanza": "<div>1</div> <div>Tal como el ciervo brama</div> <div>Por limpia corrientes</div> <div>Mi coraz&oacute;n ardiente</div> <div>Por ti suspira, oh Dios.</div> <div>&nbsp;</div> <div><strong> CORO </strong></div> <div>Esta sedienta mi alma</div> <div>Del agua cristalina</div> <div>De la verdad divina</div> <div>Mi alma tiene sed.</div> <div>&nbsp;</div> <div>2</div> <div>Mi pan de d&iacute;a y de noche</div> <div>Son l&aacute;grimas candentes</div> <div>Diciendo a m&iacute; la gente</div> <div>En donde est&aacute; tu Dios.</div> <div>&nbsp;</div> <div>3</div> <div>Se abate mucho mi alma</div> <div>Y te clamo con vehemencia</div> <div>Ten Dios de mi clemencia</div> <div>Escucha mi oraci&oacute;n.</div>"
              },
              {
                "idalabanza": 48,
                "numhimnario": 27,
                "nombre": "Con Cristo en las bodas",
                "alabanza": "<div>1</div> <div>Con Cristo en las bodas muy pronto hemos de estar</div> <div>En las naciones todas all&aacute; hemos de encontrar</div> <div>Junto a los redimidos, gozando bendici&oacute;n</div> <div>Cantaremos unidos, all&aacute; en su mansi&oacute;n.</div> <div>&nbsp;</div> <div>2</div> <div>Si t&uacute; querido hermano, hoy listo no est&aacute;s</div> <div>Con Dios el soberano, culpado t&uacute; ser&aacute;s</div> <div>Y para que t&uacute; puedes a las bodas entrar</div> <div>Hoy tu alma hoy reclama, ven a reconciliar.</div> <div>&nbsp;</div> <div>3</div> <div>Si t&uacute; querido amigo, hoy listo no est&aacute;s</div> <div>Recuerda que t&uacute; eres esclavo del pecar</div> <div>De Dios la invitaci&oacute;n, escucha sin cesar</div> <div>Ya poco tiempo queda, dale hoy tu coraz&oacute;n.</div>"
              },
              {
                "idalabanza": 49,
                "numhimnario": 28,
                "nombre": "Cara a cara",
                "alabanza": "<div>1</div> <div>En presencia estar de Cristo</div> <div>Ver Su rostro, qu&eacute; ser&aacute;</div> <div>Cuando al fin en pleno gozo</div> <div>Mi alma le contemplar&aacute;.</div> <div>&nbsp;</div> <div><strong>CORO </strong></div> <div>&iexcl;Cara a cara espero verle</div> <div>M&aacute;s all&aacute; del cielo azul</div> <div>Cara a cara en plena gloria</div> <div>He de ver a mi Jes&uacute;s!</div> <div>&nbsp;</div> <div>2</div> <div>S&oacute;lo tras oscuro velo</div> <div>Hoy lo puedo aqu&iacute; mirar</div> <div>M&aacute;s ya pronto viene el d&iacute;a</div> <div>Que Su gloria ha de mostrar.</div> <div>&nbsp;</div> <div>3</div> <div>Cu&aacute;nto gozo habr&aacute; con Cristo</div> <div>Cuando no haya m&aacute;s dolor</div> <div>Cuando cesen los peligros</div> <div>Y ya estemos en Su amor.</div> <div>&nbsp;</div> <div>4</div> <div>Cara a cara, &iexcl;cu&aacute;n glorioso</div> <div>Ha de ser as&iacute; vivir!</div> <div>&iexcl;Ver el rostro de quien quiso</div> <div>Nuestras almas redimir!</div>"
              },
              {
                "idalabanza": 50,
                "numhimnario": 29,
                "nombre": "Cielos y tierra",
                "alabanza": "<div>1</div> <div>Al que hizo tierra cielos y mares</div> <div>Vamos pidiendo la salvaci&oacute;n.</div> <div>No hay otro nombre dado a los hombres</div> <div>Desde el principio de la creaci&oacute;n.</div> <div>&nbsp;</div> <div>2</div> <div>Oremos todos con alegr&iacute;a</div> <div>Pidiendo al Padre su bendici&oacute;n</div> <div>Siempre en el nombre de Jesucristo</div> <div>Quien nos ofrece la salvaci&oacute;n.</div> <div>&nbsp;</div> <div>3</div> <div>Los allegados a Jesucristo</div> <div>Arrepentidos de coraz&oacute;n</div> <div>Ya por su sangre se encuentran listos</div> <div>Para la gloriosa resurrecci&oacute;n.</div> <div>&nbsp;</div> <div>4</div> <div>Y si Cristo viene antes que yo muera</div> <div>Y mi vestidura blanca este</div> <div>No tendr&eacute; que irme a la tumba fr&iacute;a</div> <div>Antes transformada en gloria le ver&eacute;.</div>"
              },
              {
                "idalabanza": 55,
                "numhimnario": 30,
                "nombre": "Cristo está buscando obreros",
                "alabanza": "<div>1</div> <div>Cristo esta buscando obreros hoy</div> <div>Que quieran ir con El</div> <div>&iquest;Qui&eacute;n dir&aacute;? Se&ntilde;or, contigo voy</div> <div>Yo quiero serte fiel</div> <div>&nbsp;</div> <div><strong>CORO </strong></div> <div>&iexcl;Oh! Se&ntilde;or, es mucha la labor</div> <div>Y obreros faltan ya</div> <div>Danos luz, ardiente fe, valor</div> <div>Y obreros siempre habr&aacute;.</div> <div>&nbsp;</div> <div>2</div> <div>Cristo quiere mensajeros hoy</div> <div>Que anuncien su verdad</div> <div>&iquest;Qui&eacute;n dir&aacute;? Se&ntilde;or, yo listo estoy</div> <div>Har&eacute; tu voluntad</div> <div>&nbsp;</div> <div>3</div> <div>Hay lugar si quieres trabajar</div> <div>De Cristo en la labor</div> <div>Puedes de su gloria al mundo hablar</div> <div>De su bondad y amor.</div> <div>&nbsp;</div> <div>4</div> <div>Vives ya salvo por Jes&uacute;s</div> <div>Su amor conoces ya</div> <div>Habla, pues anuncia que en la luz</div> <div>De cristo vives ya.</div>"
              },
              {
                "idalabanza": 56,
                "numhimnario": 31,
                "nombre": "Cristo es nuestro Jefe",
                "alabanza": "1\nCristo es nuestro Jefe nos lleva a la lid\nnunca perderemos si Él nos dice: “Id”.\nAún su justa causa se suele ignorar\nmás le seguiremos fiel.\n\nCORO\n¡Adelante!, es la orden del Señor\n¡adelante!, vamos sin temor\n¡adelante!, canta ya su grey;\nla victoria es cierta con el Rey.\n\n2\nNuestro estandarte luce por doquier\ncon poder y gloria siempre se ha de ver\nCristo nuestro Jefe al mundo ya venció\ny le seguiremos fiel.\n\n3\nLa furiosa lucha larga no será\ny a los vencedores nos congregará\ndonde cantaremos un himno triunfal\nsiempre siguiendo fiel."
              },
              {
                "idalabanza": 57,
                "numhimnario": 32,
                "nombre": "Compañero del camino",
                "alabanza": "1\nDivino compañero del camino\ntu presencia siento yo al transitar;\nella ha disipado toda sombra\nya tengo luz, la luz bendita de su amor.\n\nCORO\nQuédate, Señor, ya se hace tarde\nte ofrezco el corazón para posar;\nhazlo tu morada permanente\nacéptalo, acéptalo mi Salvador.\n\n2\nLa sombra de la noche se aproxima\ny en ella el tentador acechará;\nno, me dejes solo en el camino\nayúdame, ayúdame hasta llegar.\n\n3\nContigo la jornada se hace corta\nno habrá sed, ni sol fatigará;\nsi en el mar las olas amenazan.\nTú sobre ellas majestuoso andarás."
              },
              {
                "idalabanza": 58,
                "numhimnario": 33,
                "nombre": "Comprado con sangre de Cristo",
                "alabanza": "1\nComprado con sangre por Cristo\ngozoso al cielo ya voy;\nlibrado por gracia infinita\ncual hijo en su casa estoy.\n\nCORO\nLo sé, lo se comprado con sangre yo soy;\nLo sé, lo sé, con Cristo al cielo yo voy.\n\n2\nSoy libre de pena y culpa\nsu gozo él me hace sentir\nél llena de gracia mi alma\ncon él es tan dulce vivir.\n\n3\nEn Cristo Jesús yo medito\ny nunca le puedo olvidar;\ncallar sus favores no quiero\nVoy por siempre a Jesús alabar.\n\n4\nSeguro sé que la belleza\nDel gran Rey yo voy a mirar;\nAhora me guarda y me guía\nY siempre me quiere ayudar.\n\n5\nYo sé que me espera corona\nla cual a los fieles dará\nJesús Salvador, en el cielo\nMi alma con El estará."
              },
              {
                "idalabanza": 59,
                "numhimnario": 34,
                "nombre": "Como mi Dios no hay Dios",
                "alabanza": "1\nAl contemplar los cielos y la tierra\ncuando miro el paisaje de la mar;\npor las noches observo las estrellas\npor las mañana de las aves oigo el trinar\nCuando el sol que asoma por las colinas\nme admiro de lo que mi Dios creo\n//Y es que tengo que decir con toda el alma:\ncomo mi Dios, no hay dios, como mi Dios.//\n\n2\nMuchos le sirven a dioses de madera\ndioses de yeso y hasta de metal\npero no ven, no yen y no hablan\ncomo no andan los tienen que cargar\nPero mi Dios tiene su trono allá en los cielos\nY es un Dios vivo que escucha mi oración\n//Y a la Presencia de mi Dios tiembla la tierra.\nComo mi Dios, no hay dios, Como mi Dios!//"
              },
              {
                "idalabanza": 60,
                "numhimnario": 35,
                "nombre": "Cuan gloriosa será la mañana",
                "alabanza": "1\nCuan gloriosa será la mañana\nCuando venga Jesús el salvador\nLas naciones unidas como hermanas\nBienvenida daremos al Señor.\n\nCORO\nNo habrá necesidad de la luz ni el resplandor\nNi el sol dará su luz ni tampoco su calor\nAllí llanto no habrá, ni tristeza ni dolor\nPorque entonces Jesús el rey de gloria\nPara siempre será el consolador.\n\n2\nEsperamos la mañana gloriosa\nPara dar la bienvenida al Dios de amor\nDonde todo será color de rosa\nEn la santa fragancia del Señor.\n\n3\nEl cristiano fiel y verdadero\nY también el obrero de valor\nY la iglesia esposa del cordero\nEstarán en los brazos del Señor."
              },
              {
                "idalabanza": 61,
                "numhimnario": 36,
                "nombre": "Cuando allá se pase lista",
                "alabanza": "1\nCuando la trompeta suene en aquel día final\ny que el alba eterna rompa en claridad;\nCuando las naciones salvas a su patria lleguen ya\ny que sea pasada lista, ahí he de estar.\n\nCORO\nCuando allá se pase lista\nCuando allá se pase lista\nCuando allá se pase lista;\nA mi nombre yo feliz responderé.\n\n2\nEn aquel día sin nieblas, en que muerte ya no habrá\ny su gloria el Salvador impartirá;\nCuando los llamados entren a su celestial hogar\ny que sea pasada lista, ahí he de estar.\n\n3\nTrabajemos por el maestro, desde el alba al vislumbrar;\nSiempre hablemos de su amor y fiel bondad.\nCuando todo aquí fenezca y nuestra obra cese ya\ny que sea pasada lista, ahí he de estar."
              },
              {
                "idalabanza": 62,
                "numhimnario": 37,
                "nombre": "Cuando torne otra vez al polvo",
                "alabanza": "1\nCuando yo me torne otra vez al polvo\nDonde fui tomado por nuestro señor\nQuedará mi cuerpo en este panteón\nEsperando el día de la resurrección.\n\nCORO\nYa mi cuerpo muerto ya no siente nada\nNi mis oídos oyen, ni mis ojos ven\nNi mis labios hablan, ni mis manos palpa\nNi mis pies no andan sobre maldad.\n\n2\nCuando venga Cristo me levantare\nDe la tumba fría me iré con El\nCon un cuerpo nuevo que Jesús me dé\nYo me gozare por la eternidad.\n\n3\nTengo la esperanza que voy a gozar\nDe la gran promesa de nuestro señor\nYa no pasare la segunda muerte\nPorque voy con Cristo mi buen Salvador."
              },
              {
                "idalabanza": 63,
                "numhimnario": 38,
                "nombre": "Cuando leo en la Biblia",
                "alabanza": "1\nCuando leo en la Biblia cómo llama Jesús\ny bendice a los niños con amor\nyo también quisiera estar, y con ellos descansar\nen los brazos del tierno Salvador.\n\n2\nVer quisiera sus manos sobre mi reposar\ncariñosos abrazos de él sentir;\nsus miradas disfrutar, las palabras escuchar:\nA los niños dejad a mi venir\n\n3\nMás aun sus pies en oración pueden ir\nY también de su amor participar\nPues si pongo en el mi fe\nLe veré, y le escuchare\nEn el que él fue a preparar.\n\n4\nTodos los redimidos y salvados por El\nAl cordero alaban sin cesar.\nCantan voces mil y mil\nEn el  coro infantil\nPues de ellos es el reino celestial\n\n5\nMuchos hay que no saben de la bella mansión\ny no quieren seguir a Jesús.\nLes quisiera yo mostrar\nQue para ellos hay lugar\nEn el reino de eterno gozo y luz.\n\n6\nYo ansió aquel tiempo venturoso, sin fin\nel más grande, el más lúcido, el mejor\ncuando de cualquier nación\nNiños mil sin distinción\na los brazos acudan del Señor."
              },
              {
                "idalabanza": 64,
                "numhimnario": 40,
                "nombre": "Cuan grande es Él",
                "alabanza": "1\nSeñor mi Dios al contemplar los cielos\nEl firmamento y las estrellas mil\nAl oír tu voz en los potentes truenos\nY ver brillar el sol en su cenit.\n\nCORO\n//Mi corazón entona la canción\nCuán grande es El, cuán grande es El.//\n\n2\nAl recorrer los montes y los valles\nY ver las bellas flores al pasar\nAl escuchar el canto de las aves\nY el murmurrar el claro manantial\n\n3\nCuando recuerdo del amor divino\nQue desde el cielo al salvador envió\nAquel Jesús que por salvarme vino\nEn una cruz surfió por mi murió.\n\n4\nCuando el Señor me llame a su presencia\nal dulce hogar, al cielo de esplendor\nle adoraré, cantando su grandeza\nde su poder y su infinito amor."
              },
              {
                "idalabanza": 65,
                "numhimnario": 41,
                "nombre": "Cual Magdalena",
                "alabanza": "1\nCristo, mi Cristo, ¡qué indigna fuí!\ncuando no quise oir tu voz\ncuando fui joven no te serví\nahora te ruego que me perdones\npues te ofendí.\n\n2\nCual Magdalena, hoy vengo a ti\ncon mi llanto a lavar tus pies\ncon mi alabastro a derramar\nel olor suave sobre las almas\nque has de salvar.\n\n3\nMuestra tu rostro, haz oír tu voz\na mi alma triste por el dolor;\ndulce consuelo hallo en ti\nmi dulce amado, mi Padre Enterno\nPríncipe de Paz.\n\n4\nResponde ahora a mi clamor\ncon que te clama mi corazón\nbajo tu sombra descansaré\npues tuya es mi alma\ntuya es mi vida y mi corazón."
              },
              {
                "idalabanza": 66,
                "numhimnario": 42,
                "nombre": "Caminando para aquel hogar",
                "alabanza": "1\nGozándome yo voy para aquel hogar\nCaminando, caminando;\nYo siempre no me quiero aquí quedar\nCaminando para aquel hogar.\n\nCORO\nCaminando, caminando\nPara aquel hogar en donde está Jesús;\nCaminando, caminando\nDe la mano del Señor Jesús.\n\n2\nDejando este mundo y todo mal\nCaminando, caminando;\nJesús ha prometido conmigo estar\nCaminando para aquel hogar.\n\n3\nYo quiero pecadores también llevar\nCaminando, caminando;\nPara que Cristo los pueda hoy salvar\nCaminando para aquel hogar.\n\n4\nEntonces yo a Cristo allí veré\nCaminando, caminando;\nPor siempre yo su nombre alabaré\nCaminando para aquel hogar."
              },
              {
                "idalabanza": 67,
                "numhimnario": 43,
                "nombre": "Cristo fiel te quiero ser",
                "alabanza": "1\nCristo, fiel te quiero ser\nDame el poder, dame el poder;\nYo contigo quiero andar\nSin vacilar, sin vacilar.\n\nCORO\nEn tus pasos quiero seguir\nCerca de ti, cerca de ti\nY si encuentro pruebas aquí\nDame confianza en ti\n\n2\nCon Jesús yo quiero hablar\nSólo con él, solo con él;\nPaz y gozo yo tendré\nAl serle fiel, al serle fiel.\n\n3\nDame ardiente corazón\nLleno de amor, lleno de amor;\nY tu Espíritu, Señor\nComo Guiador, como Guiador\n\n4\nCada día quiero hacer\nTu voluntad, tu voluntad\nY servirte fiel, señor\nEn humildad, en humildad."
              },
              {
                "idalabanza": 68,
                "numhimnario": 44,
                "nombre": "Dame un nuevo corazón",
                "alabanza": "1\nDame un nuevo corazón\nQue te alabe noche y día;\ndame un nuevo corazón\nY que seas tú mi guía;\ndame un nuevo corazón\nY que sea morada tuya;\n//Dame un nuevo corazón//\n¡Aleluya!\n\n2\nQuiero amarte mi Señor\nPorque estoy agradecido\nya me diste salvación\nY es un Don inmerecido;\nme cambiaste el corazón\nY me diste nueva vida;\n//¡Oh! Qué hermoso amar a Dios//\n¡Aleluya!\n\n3\nYa estoy listo, mi Señor\nPara ir con el mensaje\nDe la paz y el amor\nQue las almas necesitan.\nSiento el fuego de tu amor\nY la presencia divina.\n//ya tu espíritu esta en mi//\n¡Aleluya!"
              },
              {
                "idalabanza": 69,
                "numhimnario": 45,
                "nombre": "Deja penetrar la luz",
                "alabanza": "1\nSi al cruel enemigo temes combatir\nSi la duda agobia siempre tu existir\nQue la hermosa luz de Dios fulgure en ti\nY serás feliz así\n\nCORO\nDeja penetrar la luz\nDeja penetrar la luz\nQue la hermosa luz de Dios fulgure en ti\nY serás feliz así\n\n2\nSi tu fe en Jesús muy flaca y débil es\nSi Dios no contesta tu ferviente prez\nQue la hermosa luz de Dios fulgure en ti\nY serás feliz así\n\n3\nSi feliz al cielo anhelas alcanzar\nY del mal y las tinieblas escapar\nQue la hermosa luz de Dios fulgure en ti\nY serás feliz así\n\n4\nSi anduviéramos en luz divina luz\nLimpios nos hará la sangre de Jesús\nClaridad tendremos en el corazón\nSi vivimos en la luz."
              },
              {
                "idalabanza": 70,
                "numhimnario": 46,
                "nombre": "Día de victoria",
                "alabanza": "1\nDía de victoria, y gran resplandor\nCuando Cristo volverá;\nQué glorioso encuentro con mi Salvador\nEn las nubes se verá\n\nCORO\nEn las nubes El vendrá\nEn aquel día final;\nCristo el Salvador muy pronto volverá\nun gran día sin igual.\n\n2\nDía de gran gozo, día sin igual\nCuando Cristo volverá\nDe esta tierra iremos a la celestial\ncristo ahí nos honrara.\n\n3\nOye la trompeta, anunciando está\nLa venida del Señor\nYa no más dolores, ya no más afán\nCon Jesús triunfó el Amor"
              },
              {
                "idalabanza": 71,
                "numhimnario": 47,
                "nombre": "Desde que oí las palabras de la Biblia",
                "alabanza": "1\nDesde que oí las palabras de la Biblia\nQue comentaba un hombre que enseñaba\nYo me entregue a Jesús, El sacerdote\nPara servirle en su obra hasta la muerte.\n\n2\nEs la promesa que ha de ser el hombre\nCuando se entrega de todo corazón\nA Jesucristo el Sumo Sacerdote\nDebe servirle en su obra hasta la muerte.\n\n3\nNo desmayemos los que hemos aceptado\nA Jesucristo como único Salvador\nÉl nos promete llevarnos en su obra hasta la muerte.\n\n4\nEse ha de ser el propósito de todos\nLos que formamos el cuerpo de Jesús\nEstar a cuenta esperando al Maestro\nSiempre sirviéndole en su obra hasta la muerte."
              },
              {
                "idalabanza": 72,
                "numhimnario": 48,
                "nombre": "Dios es amor",
                "alabanza": "1\nCristo te invita que vengas\nSi ya te sientes cansado;\nCristo en sus brazos te ampara\nSi tú le buscas a Él.\n\nCORO\nDios es amor, Dios es amor\nY el que vive en amor\nVive en Dios y Dios en Él.\n\n2\nEn su palabra divina\nY por su amor nos declara\nQue para Él no hay imposibles\ntodo lo puede hacer.\n\n3\nAhora es tiempo que vengas\nY de Dios busque los dones;\nTal vez se te hace imposible.\nGuárdate en la santidad.\n\n4\nVence las dificultades\nY a Cristo tu vida da.\nNo desprecies al que te ama\na Cristo el Divino Dios."
              },
              {
                "idalabanza": 73,
                "numhimnario": 49,
                "nombre": "Dime hermano ¿te está esperando?",
                "alabanza": "1\nDime hermano ¿te está esperando?\nPara el glorioso encuentro del señor\nO todavía te encuentras meditando\nEn proseguir en la senda del señor\n\n2\nTal vez a solas tu pecado has cometido\nPero con todo, siempre dices que está bien;\nNo te engañes ni seas confundido\nQue Dios está mirando los pasos de cada quien.\n\n3\nDe que te sirve decir que vas marchando\nHacia la patria bendita  del señor\nSi el mismo Dios es quien te está mirando\nQue es tu deleite vivir en el error\n\n4\nPero un día tendrás que dar tu cuenta\nAnte el gran Juez que todo sabe  ya;\nTu recompensa será una triste afrenta\nPorque en esta vida ocultaste la maldad."
              },
              {
                "idalabanza": 74,
                "numhimnario": 50,
                "nombre": "Dios nos tenga misericordia",
                "alabanza": "1\nDios nos tenga ya misericordia\nY en la tierra alcanzaremos su querer;\nDios nos haga su rostro santo\nA todos resplandecer\n\nCORO\nPara que sean conocidos en la tierra\nSus maravillas obrando en salud\n¡Oh Dios, alábenle los pueblos todos\nPor su divina y santa plenitud!\n\n2\nAlegrémonos, gocémonos hermanos\nPor la equidad con que Dios nos juzgara\nY pastoreando las naciones todas\nEn la tierra todo esto habrá.\n\n3\nCuando la tierra ya no de su fruto\nFruto vendito que Dios proveerá\nAleluya de corazón\nY nuestro Dios te bendecirá.\n\n4\nDios bendiga este santo privilegio.\nQue a su pueblo concede el amor\nTemeremos todo que él nos deje\nDe su mano el podernos guiar."
              },
              {
                "idalabanza": 75,
                "numhimnario": 51,
                "nombre": "Dios descendió",
                "alabanza": "1\nDía tan grande no puedo olvidar\nDía de gloria sin par\nCuando en tinieblas al verme andar\nVino a salvarme el Señor\nGran compasión tuvo Cristo de mí\nDe gozo y paz me lleno\nQuitó las sombras o gloria a su nombre\nMi noche en día cambió.\n\nCORO\nDios descendió y de gloria me llenó\nCuando Jesús por gracia me salvó\nFui ciego y me hizo ver y en El renacer\nDios descendió y de gloria me llenó\n\n2\nNací de nuevo en virtud de Jesús\nA la familia de Dios\nJustificado por Cristo el Señor\nGozo la gran redención\nBendito sea el Padre y Dios\nQue cuando vine con fe\nFui adoptado con Cristo el amado\nLoores por siempre daré\n\n3\nTengo esperanza de gloria eternal\nMe regocijo en Jesús\nMe ha preparado un bello hogar\nEn la mansión celestial\nSiempre recuerdo con fe y gratitud\nAl contemplarle en la cruz\nQue sus heridas me dieron la vida\nAlabo al bendito Jesús"
              },
              {
                "idalabanza": 76,
                "numhimnario": 52,
                "nombre": "Dios bendiga las almas unidas",
                "alabanza": "1\nDios bendiga las almas unidas\npor los lazos de amor sagrado\ny las guarde de todo quebranto\nen el mundo de espinas y mal.\nQue el hogar que a formarse comienza\ncon la unión de estos dos corazones\ngoce siempre de mil bendiciones\nal ampario del Dios de Israel.\n\n2\nQue el Señor con su dulce presencia\ncariñoso estas bodas presida\ny con dulzura por sendas de vida\na los que hoy se prometen lealtad.\nLes recuerde que nada en el mundo\nes eterno, que todo termina\ny por tanto con gracia divina\ncifrar deben la dicha en su Dios.\n\n3\nQue los dos que al altar se aproximan\na ofrecerse su fe mutuamente\nbusquen siempre de Dios en la fuente\nel secreto de dicha inmortal.\nY si acaso de duelo y tristeza\nse acompañasen sus sendas un día\nen Jesús hallarán dulce guía\nque otra senda les muestre mejor."
              },
              {
                "idalabanza": 77,
                "numhimnario": 53,
                "nombre": "Dos sendas",
                "alabanza": "1\nAmigo ¿cuál es tu destino?\n¿Conoces la senda en que vas?.\nCuidado, muchos se han perdido\ncuidado, que hoy mismo lo debes pensar.\n\nCORO\nSolo dos sendas hay, ¿cuál tu escogerás?\nescoge la senda de Cristo\nporque Él es el camino\nla vida y la verdad.\n\n2\nLa senda de Cristo es hermosa\nno sitio para el hospital\nmucho menos para el precipicio\nahí ni la muerte te puede salvar.\n\n3\nLicores, parrandas y fiestas\nes todo tu anhelo encontrar\npero siempre recibes solo desengaños\nsufrimientos y penas, dolores sin par."
              },
              {
                "idalabanza": 78,
                "numhimnario": 54,
                "nombre": "Dulces cantares",
                "alabanza": "1\nDulces cantares enviamos al cielo;\nen este día de gran regocijo\npues disfrutamos de paz y consuelo;\nhay alegria, hay grande gozo\nen este día de fiesta y de luz.\n\nCORO\nFeliz cumpleaños, feliz te deseamos\nque Dios te guarde en sus alas divinas\nque sus promesas que tanto anhelamos\nnunca te falten, nunca te dejen\ny la esperanza de paz brille en ti.\n\n2\nGloria cantemos a Dios, aleluya\npor la esperanza de días mejores\ngloria cantemos a Dios, aleluya\ngloria cantemos en este día\nporque esperanza tenemos en Dios.\n\n3\nHay en la Biblia promesas gloriosas\ndonde encontramos que Cristo nos dice\nque nos prepara moradas eternas\nallá en el cielo y que algún día\nvendrá a llevarnos con Él hacia Dios."
              },
              {
                "idalabanza": 79,
                "numhimnario": 55,
                "nombre": "Dulce oración",
                "alabanza": "1\nDulce oración, dulce oración\nde toda influencia mundanal\nelevas tu mi corazón\nal tierno Padre Celestial\nOh cuantas veces tuve en ti\nauxilio en ruda tentación\ny cuántos bienes recibí\nmediante ti, dulce oración.\n\n2\nDulce oración, dulce oración\nal trono excelso de bondad\ntu llevarás mi petición\na Dios que escucha con piedad\npor fe espero recibir\nla gran divina bendición\ny siempre a mi Señor servir\npor tu virtud, dulce oración.\n\n3\nDulce oración, dulce oración\nque aliento y gozo al alma das\nen esta tierra de aflicción\nconsuelo siempre me serás\nhasta el momento en que veré\nfrancas las puertas de Sión\nentonces me despediré\nfeliz de ti dulce oración.\n"
              },
              {
                "idalabanza": 80,
                "numhimnario": 56,
                "nombre": "Dulce comunión",
                "alabanza": "1\n¡Dulce comunión la que gozo ya\nEn los brazos de mi Salvador!\n¡Qué gran bendición en Su paz me da!\n¡Oh! yo siento en mí Su tierno amor.\n\nCORO\nLibre, salvo, del pecado y del temor\nLibre, salvo, en los brazos de mi Salvador.\n\n2\n¡Cuán dulce es vivir, cuán dulce es gozar\nEn los brazos de mi Salvador!\nAllí quiero ir y con El morar\nSiendo objeto de Su tierno amor.\n\n3\nNo hay que temer, ni que desconfiar\nEn los brazos de mi Salvador.\nPor Su gran poder El me guardará\nDe los lazos del engañador."
              },
              {
                "idalabanza": 81,
                "numhimnario": 57,
                "nombre": "Dios os guarde",
                "alabanza": "1\nDios os guarde en su Santo Amor\nhasta el día en que lleguemos\na la patria do estaremos\npara siempre con el Salvador.\n\nCORO\nAl venir Jesús nos veremos\na los pies de nuestro Salvador;\nreunidos todos seremos\nun redil con nuestro Pastor.\n\n2\nDios os guarde en Santo Amor;\nen la senda peligrosa\nde esta vida tormentosa\nos conserve en paz y santo amor.\n\n3\nDios os guarde en Santo Amor;\nos conduzca su bandera\ny os esfuerce en gran manera\ncon su Espíritu Consolador.\n\n4\nDios os guarde en Santo Amor;\ncon su gracia Él os sostenga\nhasta que el maestro venga\na fundar su reino en esplendor."
              },
              {
                "idalabanza": 82,
                "numhimnario": 58,
                "nombre": "Divino compañero del camino",
                "alabanza": "1\nDivino compañero del camino\ntu presencia siento yo al transitar;\nella ha disipado toda sombra\nya tengo luz, la luz bendita de su amor.\n\nCORO\nQuédate, Señor, ya se hace tarde\nte ofrezco el corazón para posar;\nhazlo tu morada permanente\nacéptalo, acéptalo mi Salvador.\n\n2\nLa sombra de la noche se aproxima\ny en ella el tentador acechará;\nno, me dejes solo en el camino\nayúdame, ayúdame hasta llegar.\n\n3\nContigo la jornada se hace corta\nno habrá sed, ni sol fatigará;\nsi en el mar las olas amenazan.\nTú sobre ellas majestuoso andarás."
              },
              {
                "idalabanza": 83,
                "numhimnario": 59,
                "nombre": "Decídete",
                "alabanza": "1\nHoy te invitamos amigo\nA gozar dicha eternal.\nSi nos desprecias, te digo:\nMañana tarde será.\n\nCORO\n¡Decídete! ¡Decídete!\nLa puerta se cerrará\n¡Decídete! ¡Decídete!\nAún abiertas está.\n\n2\nLevántate y resplandece\nQue ha llegado tu luz\nLa gloria te pertenece\nSi vienes hoy a Jesús.\n\n3\nMira, la hora ya viene\nCuando querrás aceptar;\nMuy triste y muy lamentable\nSerá mirarte llorar.\n\n4\nAndas muy cerca de Cristo\nDe su palabra también\n¡Oh! Amigo eres dichoso;\nNo es de todos el creer.\n\n5\nAlza tus ojos y mira\nLa dadiva de Jesús\nPide con toda tu alma\nAgua de vida y salud."
              },
              {
                "idalabanza": 84,
                "numhimnario": 60,
                "nombre": "Del sol más allá",
                "alabanza": "1\nYo vivo en la tierra sin riqueza alguna;\nmi único tesoro es tener a mi Dios.\nPalacio no tengo, dinero ni bienes\nsólo la esperanza de un lugar mejor.\n\nCORO\nDel sol más allá, yo tengo un hogar.\nDel sol más allá, iré a morar\nsi no tengo nada y si nada valgo\nyo sé que estaré, del sol más allá.\n\n2\nEl tiempo que viva, sin bienes alguno\nno puede igualarse del sol más allá\nlo que aquí es un día, allá son mil años;\nno se cuenta el tiempo, del sol más allá.\n\n3\nEl pobre y el rico, que en Cristo han creído\ntienen una patria, del sol más allá.\nEn Dios no hay raza, ni tribus ni lengua;\ntodos estaremos del sol más allá."
              },
              {
                "idalabanza": 85,
                "numhimnario": 61,
                "nombre": "El hijo pródigo",
                "alabanza": "1\nHubo un padre que tenía dos hijos\nuno de ellos se quiso apartar;\ndijo: padre dame la herencia\nque me quiero salir de este hogar.\n\nCORO\nY aquel padre sufrió y le herencia le dio\ny besándole empezó a llorar;\ncomo llora el Señor cuando un hijo de El\nde la iglesia se quiere apartar.\n\n2\nOrgulloso se despide el hijo\ny su herencia comenzó a gastar;\nsu dinero perdió y sin amigos se halló\nsin padre, sin Dios y sin paz.\n\n3\nSolamente apacentando cerdos\nfue el trabajo que el pudo hallar;\npero dijo volveré a mi padre\nnuevamente retorno a mi hogar.\n\n4\nMas un día el padre vio a su hijo\ny gozoso le fue a encontrar;\nhubo fiesta pues volvió su hijo\ny de nuevo retornó al hogar.\n\n5\nAsimismo el Señor, espera por ti hoy\nque regreses buscando el perdón\nen el cielo se oirá la trompeta sonar\nporque el hijo retornó al hogar."
              },
              {
                "idalabanza": 86,
                "numhimnario": 62,
                "nombre": "El regreso del hijo pródigo",
                "alabanza": "1\nCansado de pecar, hastiado de vivir\nen este mundo vil de sinsabores\nabandonado fui, sin amigos me vi\nllorando mis desgracias y mis errores.\n\nCORO\nCual pródigo viví y al cielo descendí\nsiendo yo el hijo del Rey de los cielos;\n¡Oh! Padre vengo a ti, no me hagas tal cual fui\nsolo hazme como a uno de tus siervos.\n\n2\nAl ver mi condición el regreso emprendí\nno quiero volver a donde anduve;\nmi juventud perdí, mi herencia pervertí\nen el placer y vicios donde anduve.\n\n3\nMi Padre me encontró y al hogar me llevó\nhay fiesta y alegría inolvidable;\npues Él me recibió de gracia me vistió\npor su misericordia inexplicable."
              },
              {
                "idalabanza": 87,
                "numhimnario": 63,
                "nombre": "El Jet del Evangelio",
                "alabanza": "1\nYa se oyen los motores, de fuerza poderosa\nel jet del evangelio, se alista a salir;\ny va rumbo al espacio, a recibir a Cristo\nel cual dice la Biblia, que pronto ha de venir.\n\nCORO\nEl jet del evangelio se va, se va, se va\ny si no estás adentro no irás, no irás, no irás;\namigo es gratuito hoy puedes abordar.\n\n2\nEl jet del evangelio, simboliza a la iglesia\nque ha aceptado a Cristo, como su salvador;\namigo entra ahora, millones hay adentro\nel jet del evangelio se va y no volverá."
              },
              {
                "idalabanza": 88,
                "numhimnario": 64,
                "nombre": "En el Valle Florece la Rosa",
                "alabanza": "1\nEn el valle florece la rosa\nla más bella del Valle Sarón;\nOh, la vida en Cristo es hermosa\nsi lo aceptas con el corazón.\n\nCORO\nYo estaré con Jesús en el cielo\ny por siempre su rostro veré;\ncon los santos en las alabanzas\ncon mi canto también me uniré.\n\n2\nJesús la promesa divina\nes la rosa más bella que el sol\nes la rosa de toda la iglesia\nque le sirve con el corazón.\n\n3\nSi la rosa que está en el campo\nque por tiempos hermoseando está;\ncuanto mas es vida en Cristo\nque te ofrece por la eternidad"
              },
              {
                "idalabanza": 89,
                "numhimnario": 65,
                "nombre": "El Clarín",
                "alabanza": "1\nAlístate amigo la hora ya viene\nen que todo el mundo tendrá que sufrir.\nA este llamado que estás recibiendo\nsi tu lo desprecias tendrás que sufrir.\n\nCORO\nYa el clarín suena en el aire oh si\npara llamar a sus escogidos también\nserán transformados para no ver muerte\nserán trasladados a un nuevo Edén.\n\n2\nEl mundo se pierde, pobre de aquel hombre\nque nunca en la vida le quiso aceptar\nque nunca jamás tendrá llamamiento\nporque a su amado no quiso aceptar.\n\n3\nHoy alza tus ojos mira hacia el oriente\nque ya se aproxima el juicio final;\nsi el mundo se pierde es por su capricho\nporque nunca quiso apartarse del mal.\n4\nSi no has podido dejar el pecado\nen tus placeres te vas a perder\nsi ya despreciaste el mundo de penas\nallá en los cielos nos podremos ver."
              },
              {
                "idalabanza": 90,
                "numhimnario": 66,
                "nombre": "El Creyente Feliz",
                "alabanza": "1\nViví agobiado por el peso de mis culpas\nsin fe, sin luz, sin esperanza y sin Dios\nmas soy feliz porque Cristo me hizo libre\ny mi deleite es andar de El en pos.\n\nCORO\nAleluya, Aleluya, Aleluya\nAleluya, Aleluya al Señor\nAleluya, Aleluya, Aleluya\nAleluya, que grande es su amor.\n\n2\nSi tan feliz es el alma en esta tierra\nunida a Cristo en comunión espiritual\nqué será el mirar su excelsa gloria\nen aquella hermosísima ciudad.\n\n3\nEn esta vida no hay gozo más sublime\nque gozar de Cristo salvación\ny tener de su Espíritu Divino\nconstantemente su santa comunión."
              },
              {
                "idalabanza": 91,
                "numhimnario": 67,
                "nombre": "El Amor de Jesucristo",
                "alabanza": "1\nEl amor de Jesucristo\nes un amor sin igual\n// Que por su misericordia\nnos dio vida eternal.//\n\n2\nGracias le damos al Padre\ngracias al hijo de Dios;\n// gracias al Espíritu Santo\nque su plenitud nos dio.//\n\n3\nYo acepto a Jesucristo\ncomo mi único Salvador\n// por su sangre derramada\nsoy feliz en el Señor.//\n\n4\nJesucristo está llamando\nven, ahora, a tu Señor\n// Cristo busca, Cristo llama\n¨ven ahora, pecador¨.//"
              },
              {
                "idalabanza": 92,
                "numhimnario": 68,
                "nombre": "El Ciego",
                "alabanza": "1\n¡Oh, Altísimo Señor Jesús!\n¡Oh, Grandísimo Señor Jehová!\n//perdonadme toda mi maldad\npor mi gran intercesor, Jesús.//\n\n2\nComo el ciego Bartimeo allí\nexclamaba en alta voz\n//Él decía: ¨Hijo de David\nven y ten misericordia de mi.¨//\n\n3\nCuantos ciegos han venido aquí\npara ver al hijo de David\n// mi Jesús con su gran poder\na los ciegos Él los hace ver.//\n\n4\nYo era ciego como Bartimeo\npero Cristo ya me hizo ver\n// el camino que conduce al cielo\ny hoy le alabo con su gran poder.//"
              },
              {
                "idalabanza": 93,
                "numhimnario": 69,
                "nombre": "El inmenso don de Dios",
                "alabanza": "1\nVeía en la cruenta cruz al Salvador Jesús\nquien por mi pecado se entregó\ny pude en el instante recibir su luz\nese inmenso don de Dios.\n\n2\nYo anduve perdido en el error\nhundido entre nieblas sin saber\nque había una vida para mi\nmas hoy por mi Jesús yo sé que habitaré\nla Patria Celestial de Dios.\n\n3\nCuando a la cruz llegué cansado de sufrir\nlos brazos del Señor abiertos vi\ny pude comprender su inmenso amor y ver\nque fue por rescatarme a mi.\n\n4\nYo sé que con Jesús caminaré\nla gloria de su rostro adoraré\ntambién sé que su amor Él me dará\ny alegre yo estaré, pues mi alma guardará\npor toda la eternidad."
              },
              {
                "idalabanza": 94,
                "numhimnario": 70,
                "nombre": "El Rey ya Viene",
                "alabanza": "1\nLas aves ya no cantan. Las calles quietas son.\nLos obreros ya descansan. La cosecha ya pasó\ny los padres y las madres, con sus hijos correrán\npara recibir a Cristo su divino Salvador.\n\nCORO\nEl Rey ya viene. El Rey ya viene\nya oí la gran trompeta, y su rostro yo veré;\nEl Rey ya viene. El Rey ya viene\nJesucristo ya viene por mi.\n\n2\nPuedo ver las multitudes. Puedo oir su gran refrán\npues el Cristo ha venido y ha vencido a Satán.\nY los salvos por su gracia empiezan a cantar\nalabanzas al cordero, que los viene a llevar.\n\n3\nMuy felices son las caras de los salvos por la fe\ny los presos libertados glorifican al gran Rey.\nLos niños y los ancianos, los enfermos que Él sanó\nlos leprosos ya limpiados, todos cantan con fervor."
              },
              {
                "idalabanza": 95,
                "numhimnario": 71,
                "nombre": "El Bello Lucero",
                "alabanza": "1\nBello lucero, derrame lumbre\nriega glorioso tu luz sideral;\nguía radiante la senda del mago\ny a los pastores siempre los conduzca\nel fulgor de tu luz.\n\nCORO\nBello lucero que me guía\naquel pueblo de Dios\ndichoso pueblo de aquella Belén\ntierra de santa dicha llena\ny de grata visitación\ndonde se encuentra aquel bello y tierno amor.\nEl Rey de Reyes y Señor es Él;\nEl Príncipe de Paz eterno\nEn gloria y luz su faz está.\n\n2\nBello lucero, anuncia el mundo\nque tu pecado pronto quitará\nCristo el bendito, ya nace radiante\ny viene triunfante con toda potencia\nen un reino de amor.\n\n3\nBello lucero de la mañana\nque trae gozo a mi corazón\ndestruyes todas la negras tinieblas\ny dejas al hombre libre para siempre\nde la condenación."
              },
              {
                "idalabanza": 96,
                "numhimnario": 72,
                "nombre": "El Talento",
                "alabanza": "1\nAunque muchos dolores te atormenten\ny seas por los tuyos despreciado\nrecuerda que Cristo fue paciente\nno olvides cuando hirieron su costado.\nLa sangre que vertió no está perdida\nconvirtióse en una fuente carmesí\ndonde muchos lavaron sus heridas\ny sanaron como yo sanado fui.\n\nCORO\n// ¿Qué has hecho del talento que te dio? //\ncuando Cristo te venga a preguntar\n¿qué hiciste del talento que te dio?\n\n2\nCuando triste te halles y abatido\ny se aleje de ti la bendición\nora hermano que el tiempo lo has perdido\nno ocupándote ya de la oración.\nLa oración es el único alimento\nque a todo fiel cristiano sostendrá\ncuando al Padre dirijas tus lamentos\nten paciencia que Él te responderá.\n\n3\nNo te enojes a causa de tu hermano\nperdónale si en algo te ofendió.\nQue el deber de todo fiel cristiano\nes amarnos como el Padre nos amó.\nPasemos un momento hasta el Calvario\npara ver a Jesús cómo murió\nen la cruz Él perdonó a sus adversarios\ny con el Padre Él los reconcilió."
              },
              {
                "idalabanza": 97,
                "numhimnario": 73,
                "nombre": "El Espíritu Santo",
                "alabanza": "1\nEl Espíritu Santo, promesa del Padre\nse está derramando\nbendiciones del cielo, pueden contemplarse\ncual lluvia temprana.\nMensajeros del cielo su mensaje predican\nle cantan y oran;\n// Y una fiesta gloriosa es aquella que vemos\ncomo el día esplendente del Pentecostés.//\n\n2\nSi nosotros pedimos la unción de lo alto\ntambién gozaremos;\nque el Espíritu Santo llene nuestras vidas\nde gozo inefable.\nBellos dones tendremos y de fiesta estaremos\ncantando aleluyas;\n// sanarán los enfermos al ponerles las manos\nporque Dios es el mismo desde ayer hasta el fin.//\n\n3\nEl el día anhelado cuando Cristo descienda\ncon gran potencia.\nCantarán las estrellas, los cielos y mares\nlos ríos y montes.\nY todo el universo lucirá regia gala\ncon la Gloria de Cristo.\n// ¡Qué glorioso ese día cuando Cristo descienda\npues a todos sus fieles arrebatará! //"
              },
              {
                "idalabanza": 98,
                "numhimnario": 74,
                "nombre": "El Mundo a Ciegas",
                "alabanza": "1\nEl mundo a ciegas va caminando\ny en sus maldades se está muriendo;\nlas profecías se están cumpliendo\nde Apocalipsis trece, catorce.\n\n2\nEl evangelio les es locura\ny a este mundo le dan honores\nporque no saben el paradero de\nlos que adoran dioses ajenos.\n\n3\nLos que no crean al Evangelio\ntendrán que creer en el anticristo\nporque es la imagen de la gran bestia\nque engañará a todo el mundo entero.\n\n4\nEl segundo ángel bajó del cielo\na derramar su boca al mar\ny todo el mar se convierte en sangre\ny todos los seres en él murieron.\n\n5\nChicos y grandes, ricos y pobres\ntendrán que ser todos señalados\nporque sin ese sello no pueden\ncomprar ni vender nada a ninguno."
              },
              {
                "idalabanza": 99,
                "numhimnario": 75,
                "nombre": "El Éxodo",
                "alabanza": "1\nCuando Moisés a su pueblo sacó al desierto a peregrinar\ncon brazo fuerte lo guiaba, hasta llegar a Canaán\nallí les dio posesión, donde pudieran estar.\nEl pueblo se reveló en pos de otros dioses que no conoció.\n\nCORO\nGrande y glorioso es Jehová, y compasivo en amor\nporque nos vino a sacar de la esclavitud del rey\nFaraón. En el Monte Sinaí, allí su gloria le dio\nAllí le entregó a Moisés las tablas escritas de su Santa Ley.\n\n2\nCuando de día caminaba, nubes del sol les cubrió\ncuando de noche anduvieron, columnas de fuego su sendas alumbró.\nPero ellos fueron felices, porque Jehová los guardó\ncuarenta años caminaron y nunca sus ropas se les terminó.\n\n3\nMaldita fue la sentencia al que abrogara la ley;\npero nació la clemencia, nació conforme a la ley\nera el Señor Jesucristo, nacido de una mujer\nque vino a sacar mi alma que estaba perdida."
              },
              {
                "idalabanza": 100,
                "numhimnario": 76,
                "nombre": "El Amigo Eterno",
                "alabanza": "1\nHe llegado a comprender que en esta vida\nno hay amigo como Aquel que está en el cielo.\nLos amigos de este mundo siempre fallan;\npero Aquel que está en los cielos es sincero.\n\nCORO\nAmigo no es, el que busca tu dinero\ntampoco aquel que te desprecia luego\nsólo es amigo aquél que está en el cielo\nes amigo ayer, amigo hoy, amigo eterno.\n\n2\nEl hijo pródigo salió de su hogar\ny malgastó con sus amigos todo el dinero\ny cuando todo lo que tenía se le acabó\nsus amigos le dejaron y se fueron.\n\n3\nEstás triste y te hallas sin consuelo\nestás enfermo y se te acabó el dinero\nlos amigos de este mundo te han dejado\npero Cristo te ofrece amor sincero."
              },
              {
                "idalabanza": 101,
                "numhimnario": 77,
                "nombre": "En las aguas del bautismo",
                "alabanza": "1\nEn las aguas de la muerte\nsumergido fue Jesús;\nmas su amor no fue apagado\npor sus penas en la Cruz.\n\n2\nLevantóse de la tumba\nsus cadenas quebrantó\ny triunfante victorioso\na los cielos ascendió.\n\n3\nEn las aguas del bautismo\nhoy confieso yo mi fe;\nJesucristo me ha salvado\ny en su amor me gozaré.\n\n4\nEn las aguas humillantes\na Jesús siguiendo estoy;\ndesde ahora para el mundo\ny el pecado muerto estoy.\n\n5\nYo que estoy crucificado\n¿Cómo más podré pecar?\nYo que estoy resucitado\nsanta vida he de llevar.\n\n6\nSon las aguas del bautismo\nmi señal de salvación\ny yo quiero consagrarme\nal que obró mi redención."
              },
              {
                "idalabanza": 102,
                "numhimnario": 78,
                "nombre": "El Tren",
                "alabanza": "1\nEl evangelio el tren que mañana correrá\nDe la estación saldrá rumbo a la ciudad de Sión\nCompren pronto sus boletos porque ya se acabarán.\n\n2\nEs la Biblia la estación que conduce para Sión\ntodos estos son cristianos que pidieron el perdón\nY lavaron sus pecados con la sangre del Señor.\n\n3\nHay boletos en la Biblia cómprelos en la estación\ncompren pronto sus boletos porque tiempo ya no habrá\nEste tren ya no regresa por toda la eternidad.\n\n4\nYa muy pronto llegaremos a la tierra de Canaán\nEsperando que ya pronto la trompeta suene el Sión\nNo sabemos cuál momento llegue el alma al Señor.\n\n5\nMi boleto tiene el sello de San Juan catorce dos\ny una corona blanca que se llama la Ciudad\ndonde todos estaremos si le somos fiel a Él."
              },
              {
                "idalabanza": 103,
                "numhimnario": 79,
                "nombre": "El Rapto",
                "alabanza": "1\nCuando el cielo abra sus puertas, y el señor Jesús\ndescienda, al sonar de la trompeta, su venida anunciará\nY las almas redimidas, que han dormido él las despierta\nY al sonar de la trompeta, sus bodas celebrarán.\n\nCORO\nSonarán trompetas, sonarán trompetas\nAnunciando que Cristo, su iglesia arrebatara\nSoñarán trompetas, sonarán trompetas\nY al sonar de la trompeta, sus bodas celebrarán.\n\n2\nDespués que ascienda la iglesia, confusión habrá en la tierra.\nLa madre Busca a su hijo, y no lo podrá encontrar\nY pregunta a sus vecinas, y le dicen no lo he visto\nEs porque se fue con Cristo, en las bodas él está.\n\n3\nEl esposo se levanta, la esposa no lo encuentra\nSe va en busca del hermano, y no le puede encontrar.\nEl hombre se desespera, confusión habrá en la tierra\nMás en los cielos hay fiesta, por la boda celestial.\n\n4\nEl doctor busca al paciente, pues su cama está desierta\nLa enfermera no lo encuentra, confundidos ellos están\nLos que llevaban al muerto, uno ha desaparecido\nEs porque se fue con Cristo, en las bodas él está."
              },
              {
                "idalabanza": 104,
                "numhimnario": 80,
                "nombre": "En el día que voy a partir",
                "alabanza": "1\nEn el día que voy a partir\nDe esta tierra donde está el Señor\nEste cuerpo defiende a la tumba\nY mi alma, está viene al Creador.\n\n2\nEste día glorioso y sublime\nQue yo esté con Jesús mi Señor\nEs la vida que yo tanto aspiro\nEsa vida con mi Salvador.\n\n3\nNo habrá día tan dulce como éste\nLo contemplo de dicha inmortal\nRecibiendo corona celeste\nY un vestido de lino eternal.\n\n4\nPor mil años reinando con Cristo\nYo estaré con Jesús mi Señor;\nen el aire, naciones ya listas\ntodos juntos daremos loor."
              },
              {
                "idalabanza": 105,
                "numhimnario": 81,
                "nombre": "Entera Consagración",
                "alabanza": "1\nQue mi vida entera esté consagrada a ti, Señor\nQue mis manos pueda guiar, el impulso de tu amor.\n\nCORO\nLávame en tu sangre, Salvador\nLímpiame de toda mi maldad\nTraigo a ti mi vida, para ser, Señor\nTuya por la eternidad.\n\n2\nQué mis pies tan sólo en pos, de lo santo puedan ir\nY que a ti, Señor mi voz, se complazca en bendecir.\n\n3\nQué mi tiempo todo este, consagrado a tu loor.\nQué mis labios al hablar, hablen sólo de tu amor.\n\n4\nToma ¡oh Dios! Mi voluntad, hazla tuya, nada más;\nToma, si, mi corazón, por tu trono lo tendrás.\n\n5\nToma tu mi amor, que hoy, a tus pies vengo a poner;\ntoma todo lo que soy, todo tuyo quiero ser."
              },
              {
                "idalabanza": 106,
                "numhimnario": 82,
                "nombre": "En el tren de la vida",
                "alabanza": "1\nEn el tren de la vida, que va para Sión\nSin comprar boletos en este voy yo\nEl viaje es glorioso y gozoso estoy\nPorque Cristo es el conductor.\n\n2\nLos que van de viaje gozosos están\nSólo van pensando en la gran ciudad\nDe calles de oro y mar de cristal.\nDo por siempre morarán.\n\n3\nSi en el tren de la vida deseas viajar;\ndate prisa, amigo hazle la señal;\ntodavía es tiempo porque asientos hay\nSólo falta tu llamar.\n\n4\nEn la estación do pasando va\nHazle la señal y pronto parará\nel viaje es directo, no hay porqué pagar\nporque ya pagado esta.\n\n5\nCánticos celestes se oyen resonar\nporque jubiloso el pasajero va\nesperando ansioso la estación final\ndel palacio celestial."
              },
              {
                "idalabanza": 107,
                "numhimnario": 83,
                "nombre": "En Egipto esclavo fui",
                "alabanza": "1\nEn Egipto esclavo fui, sí, sí oh sí.\nEn Egipto esclavo fui del Faraón\n// triste, muy triste estaba, mi corazón lloraba\nHazme libre señor. //\n\nCORO\n// Libre Tú me hiciste libre, Tú me hiciste libre\nlibre Señor.//\n\n2\nMoisés fue a Faraón sí, si, oh sí\nMoisés fue a faraón y le dijo así:\n// Deja ir a mi pueblo para rendirme culto, ha dicho\nel Señor. //\n\n3\nFaraón se endureció, si, si, oh sí\nFaraón se endureció, no los dejó ir\n// Dios envío diez plagas, desenvainó su espada\nNos dio la libertad.//\n\n4\nAhora que libre estoy sí, si, oh sí\nAhora que libre estoy, libre para ti\n// Quiero rendirte culto, quiero cantarte gloria, gloria\nquiero a ti Señor. //\n//Gloria, gloria, aleluya, gloria, aleluya, a ti\nSeñor.//"
              },
              {
                "idalabanza": 108,
                "numhimnario": 84,
                "nombre": "En las letras de un papel",
                "alabanza": "1\nEl camino del Señor Jesús lo conocí yo por\nla fe caminando encontré\nen un papel su nombre allí\nen las letras de un papel allí\ndecía así que él era Dios.\nCaminando siempre vi, al mirar\nsu nombre allí, qué feliz papel hallé.\n\n2\nEn las letras del papel yo vi\nque dos caminos prometió\nmientras uno tiene paz\nel otro tiene perdición.\nEn las letras del papel hallé\nla paz de Cristo al hombre da\nEsto fue lo que yo miré\ncuando yo leí el papel que feliz papel hallé.\n\n3\nCaminando siempre ya pensé\nque no era justo caminar\ncaminando sin tener dónde llegar\npara vivir caminando siempre\nmás allá una parte que era Dios\neso fue lo que miré cuando\nme encontré el papel\nuna gran salvación."
              },
              {
                "idalabanza": 109,
                "numhimnario": 85,
                "nombre": "En pecado yo vagaba",
                "alabanza": "1\nEn pecado yo vagaba\nSin esperanza y sin Dios\nMás Jesús me ha salvado\nDe este mundo tan atroz.\n\nCORO\n//Y yo sé, sí, yo sé...\nMi Jesús acoge al más vil pecador.//\n\n2\nPecador, Jesús te llama\nél te quiere perdonar;\nOye hoy la voz que dice:\n¨ven, te haré yo descansar¨.\n\n3\nAunque seas tú muy malo\nsalvación hay para ti\nPues salvo el más malvado\ncuando me salvó a mí.\n\n4\nHallarás perdón en Cristo\nél es vida y la luz.\nPecador, no te detengas\nVen al dulce Jesús."
              },
              {
                "idalabanza": 110,
                "numhimnario": 86,
                "nombre": "En el mundo la iglesia es peregrina",
                "alabanza": "1\nEn el mundo la iglesia es peregrina\nAnhelante espera su hogar\nA gozar de las bellas mansiones\nJunto al río cristalino más allá.\n\nCORO\nNos veremos, nos veremos en la gloria\nNos veremos en la tierra más allá.\nNos veremos, nos veremos en la gloria\nJunto al río cristalino más allá.\n\n2\nEn este mundo no hay cosa permanente\nPorque todo tendrá que terminarse;\nLos cristianos miremos adelante\nEn el cielo nos espera nuestro hogar.\n\n3\nEste mundo pronto lo pasaremos\nSe acabaron las penas y el dolor\nEsperando la gloriosa mañana\nEn que todos nos hemos de reunir.\n\n4\nOh pecador, no quieres aceptarle\na Jesús que te ofrece el perdón\nvenid ahora al Salvador divino\nque te dice: yo te haré descansar."
              },
              {
                "idalabanza": 111,
                "numhimnario": 87,
                "nombre": "En la Cruz",
                "alabanza": "1\nMe hirió el pecado fui a Jesus\nmostréle mi dolor\nperdido errante vi su luz\nbendíjome en su amor.\n\nCORO\nEn la cruz, en la cruz\ndo primero vi la luz\ny las manchas de mi alma yo lavé;\nfue allí por fe do vi a Jesús\ny siempre feliz con él seré.\n\n2\nSobre una cruz, mi buen Jesús\nsu sangre derramó\npor este pobre pecador\na quién así salvo.\n\n3\nVenció la muerte con poder\nal cielo se exaltó;\nconfiar en Él es mi placer\nmorir no temo yo.\n\n4\nAunque Él se fue solo no estoy\nmandó al consolador;\nDivino Espíritu que hoy\nme da perfecto amor."
              },
              {
                "idalabanza": 112,
                "numhimnario": 88,
                "nombre": "En el Calvario",
                "alabanza": "1\nEn el Calvario estaba una cruz levantada\ndo yacía mi Cristo a salvarme\nera el hijo de Dios que verguenza sufría\npor salvar a un mundo perdido.\n\nCORO\nJesús en la cruz es mi lema\nJesús en la cruz me salvó\naunque otros adoren la cruz de Jesús\nyo adoro a Jesús de la cruz.\n\n2\nConocían la cruz como emblema de pena\nmas aquellos que le clavaron\nno sabían que allí Él ganó gloria plena\npor salvar a un mundo perdido.\n\n3\nOtros pueden loar a la cruz de mi Cristo\npero yo a mi Cristo adoro.\nAunque aprecio la cruz, sólo este es mi canto\nCristo salva a las almas perdidas."
              },
              {
                "idalabanza": 113,
                "numhimnario": 89,
                "nombre": "El alfarero",
                "alabanza": "1\nUn día orando, le dije a mi Señor\nTú El Alfarero y yo el barro soy\nMoldea mi vida a tu parecer\nComo tu quieras, hazme un nuevo ser.\n\nCORO\nMe dijo no me gustas, te voy a quebrantar\nY en un vaso nuevo, te voy a transformar\nPero en el proceso, te voy a hacer llorar\nPorque por el fuego, te voy hacer pasar.\n\n2\nQuiero una sonrisa, cuando todo va mal\nQuiero una alabanza, en lugar de tu quejar\nQuiero tu confianza, en la tempestad\nY quiero que aprendas también a perdonar."
              },
              {
                "idalabanza": 114,
                "numhimnario": 90,
                "nombre": "El fin del mundo",
                "alabanza": "1\nEl fin del mundo se acerca ya\nEl evangelio se acabará\nYa las señales están cumpliendo\nSe están cumpliendo como escrito está.\n\nCORO\nQuerido amigo. Cristo te llama\nNo hagas duro tu corazón\nRíndete a Cristo. Él quiere tu alma\nY tendrás parte en la resurrección.\n\n2\nAl cielo vuelan todos los santos\nLos que sufrieron por el Señor\nAl cielo vuelen mis dulces cantos\nLos que dedico solamente a Él.\n\n3\nEn aquel día andarán las gentes\nDesesperadas por su maldad\nSerá el lloro y el crujir de dientes\nLos que predican ya no existirán.\n"
              },
              {
                "idalabanza": 115,
                "numhimnario": 91,
                "nombre": "En el calvario hay una fuente inagotable",
                "alabanza": "1\nEn el calvario hay una fuente inagotable\nAdmirable Manantial de agua viva\nDonde todo pecador puede salvarse\nY a los muertos darles vida.\n\nCORO\nEsta es la fuente carmesí que en el calvario\ndel costado de Jesús pudo manar\nUna fuente carmesí de sangre y agua\nPara poder al pecador salvar.\n\n2\nMi Jesús desde la cruz mirando al cielo\nEnclavado y Coronado en un Madero\nExclamaba en idioma hebreo\nPadre mío, porque me has desamparado\n\n3\nPecador no desprecies al despreciado\nQue los judíos no quisieron aceptarle\nY nosotros titulados como impíos\nYa despreciados, el vino a salvarnos.\n"
              },
              {
                "idalabanza": 116,
                "numhimnario": 92,
                "nombre": "En Cristo feliz es mi alma",
                "alabanza": "1\nEn Cristo feliz es mi alma\nPrecioso es su celido don\nSu voz me devuelve la calma\nSu faz me anticipa el perdón.\n\nCORO\nYo soy feliz en Él\nYo soy feliz en Él\nEl gozo y la paz inundan mi ser\nPues yo soy feliz en Él.\n\n2\nMucho antes que yo, El buscome\nMe trajo a su amado redil\nDe amor en sus brazos llevome\nDo hay dicha y encantos a mil.\n\n3\nSu amor fraternal me circunda\nSu gracia conforta mi ser.\nSu Espíritu Santo me inunda\nDe un noble y extraño poder.\n\n4\nA él seré un día semejante\nDejando este cuerpo mortal.\nY mientras discípulo amante\nSer quiero hasta el día final."
              },
              {
                "idalabanza": 117,
                "numhimnario": 93,
                "nombre": "En un Aposento Alto",
                "alabanza": "1\nUn aposento alto\nCon unánime fervor\nciento veinte esperaban\nLa promesa del Señor.\n\nCORO\nDios manda tu gran poder\nDios manda tu gran poder\nDios manda tu gran poder\nA cada corazón.\n\n2\nCon estruendo de los cielos.\nDescendió con gran virtud\nTodos fueron bautizados\nCon él Santo Espíritu.\n\n3\nEste gran poder antiguo\nEs de fiel celeste don.\nPrometido a los creyentes\nDe humilde corazón.\n\n4\nDios está restituyendo\nEste gran pentecostés\nY el Espíritu sus dones\nNos reparte otra vez."
              },
              {
                "idalabanza": 118,
                "numhimnario": 94,
                "nombre": "En la Nueva Jerusalén",
                "alabanza": "1\nCuando cesen los conflictos de la vida Terrenal\nY dejemos este mundo de aflicción.\nEntraremos por las puertas de la patria celestial\nEn la Nueva Jerusalén.\n\nCORO\nCantaremos con los santos la canción de redención\nEn Jerusalén\nCon acentos de alegría alabando al Salvador\nEn la gran Jerusalén.\n\n2\nAunque el mar embravecido y las olas del turbión\nSiempre agiten nuestra pobre embarcación\nFiando en Cristo llegaremos a la playa celestial\nDe la Nueva Jerusalén.\n\n3\nConsagremos nuestras vidas al Servicio del señor\nSiempre hablemos de su grandede salvación\nSi en su viña trabajamos nos espera galardón\nEn la Nueva Jerusalén.\n\n4\nEn aquel país hermoso do jamás se dice adiós\nGozaremos el descanso sin afán\nCara a cara allá veremos a Jesús, quién nos salvó\nEn la Nueva Jerusalén."
              },
              {
                "idalabanza": 119,
                "numhimnario": 95,
                "nombre": "Embajador",
                "alabanza": "1\nEmbajador, que a Cristo representas\nEn esta tierra de pecado y de maldad\n//Es tu deber trabajar hasta que el venga\nY de sembrar la palabra de verdad.//\n\n2\nVes que a veces se amontonan las tinieblas\nY se oyen gritos en la densa oscuridad.\n//Dejarás que perezcan sin defensa\nCuando puedes señalarles libertad.//\n\n3\nAcuérdate del mandato de tu Cristo\nA quien tú con humilde corazón\n//Prometiste servirle y estar listo\nY ocuparte sin demora en su labor.//\n\n4\nNo desmayes, la Victoria está segura\nAdelante con valor, sin vacilar\n//A las almas hablarles con ternura\nDe Cristo y de su sangre eficaz.//\n\n5\nEmbajador fiel y no de esta tierra.\nSino de aquella hermosa patria celestial.\n//Cumple fielmente, que al fin de tu carrera\nLa bienvenida tu Maestro te dará.//"
              },
              {
                "idalabanza": 120,
                "numhimnario": 96,
                "nombre": "Es Penosa mi Vida Peregrina",
                "alabanza": "1\nEs penosa mi vida peregrina\nCardos punzantes tan sólo encontré\nLa voz de Dios al cielo me encamina\nQué me dice contigo Yo seré.\n\n2\nA cada instante el mar embravecido\nSus negras olas arroja sobre mí\nCristo amante, benigno y compasivo\nMe dice siempre Yo velaré por ti.\n\n3\nEn esta tierra yo Soy peregrino\nDespreciado aquí siempre me veré\nCon la esperanza que al fin de mi camino\nHay un cielo allá feliz seré.\n\n4\nOh, que gozó, que dicha, qué ventura\nCuando esta tierra Yo he de abandonar\nCuando dejé esta vida de amargura\nAllá en aquella mansión iré a gozar.\n\n5\nCuando termine mi vida peregrina\nY ya esté en presencia del Señor\nCuando contemple Su Majestad divina\nAllá mis cantos daré en su Loor."
              },
              {
                "idalabanza": 121,
                "numhimnario": 97,
                "nombre": "Es Cristo la Roca",
                "alabanza": "1\nEn las olas inmensas de embravecido mar\nQue saltan de mi alma la pobre embarcación\nDe rodillas a Cristo clame y el huracán\nDeshecho fue al instante a la voz de Dios.\n\nCORO\nEs Cristo la roca, el ancla de mi fe\nLos males, lamentos y ayes de temor\nTerminarán por siempre con mi supremo rey\nEs Jesucristo mi refugio.\n\n2\nMi guarda de peligros, te pruebas de dolor\nEl manda que los vientos no agiten tempestad\nLos mares se detienen, la ola reposo\nY en Cristo fijo el ancla, confiado más.\n\n3\nMi dulce Salvador, si mi hermoso amigo y Dios\nQué libra de tristeza y aleja amarga hiel\nPor fe ir al cielo, mansión del ser de amor\nLa fuente inagotable de dicha y bien."
              },
              {
                "idalabanza": 122,
                "numhimnario": 98,
                "nombre": "Estemos Listos",
                "alabanza": "1\nEstemos listos todos los hermanos\nEs la llamada de todos los santos\nQue Cristo viene ya del cielo pronto\nA arrebatarnos de todo corazón.\n\n2\nHa prometido buscarnos un lugar\nPara el descanso de la Gran Batalla\nPues para aquellos que han sembrado mucho\nEl evangelio de la gran salvación.\n\n3\nTenemos pruebas y muchos sufrimientos\nNo desmayemos, sigamos adelante\nQue Dios nos tiene una corona a todos\nLos que han creído y saben la verdad.\n\n4\nPues esperamos más y más alertas\nDe su venida que será gloriosa\nCantemos todos juntos: Aleluya\nY demos honra y glorias al Señor."
              },
              {
                "idalabanza": 124,
                "numhimnario": 99,
                "nombre": "Escondeme en tu Gloria",
                "alabanza": "1\nSeñor, dame tu mano y Sácame adelante\nY haz que en ningún instante me separé de ti\nQue la gloria que hizo a Moisés irradiante\nPermanezcan tu siervo como en el Sinaí.\n\n2\nQuiero tener tu mente, pensar como tú piensas\nQuiero ver el pecado cómo lo miras tú\nY quiero como Job, tener tanta paciencia\nPara sufrir las pruebas por tu causa Jesús.\n\n3\nSeñor, qué mis labios emanen alabanzas\nY sea cual la fragancia de perfume en tu altar\nPermíteme que pueda tener esa confianza\nEstar junto a tu pecho el apóstol Juan.\n\n4\nTú eres poderoso, sabio, celoso y fuerte\nY aún la misma muerte se doblega ante ti\nExtiendeme tu mano, Señor Omnipotente\nPermíteme que pueda servirte hasta morir."
              },
              {
                "idalabanza": 125,
                "numhimnario": 100,
                "nombre": "Es Nuestro Dios quien Matiza esos Cielos",
                "alabanza": "1\nEs nuestro Dios quien matiza esos cielos\nCuando la tarde empieza a declinar\nAsí nos muestra cómo es allá en la gloria\nPara los que esperan con Cristo ir a reinar.\n\n2\nNo ves la luna cómo es allá en los cielos\nCuando aparece con grande iluminación\nAsí es el hombre que cree al Evangelio\nPues el anuncia una gran de salvación.\n\n3\nOh ven amigo, no desprecies a Cristo\nPues él te ofrece lugar en su mansión\nVen de rodillas aquí a los pies de Cristo\nTe llevaremos a Dios en oración.\n\n4\nA las mansiones que Cristo ha preparado\nEl te ofrece llevarte pecador\nNo seas sordo al glorioso Evangelio\nque es la palabra de nuestro Salvador."
              },
              {
                "idalabanza": 126,
                "numhimnario": 101,
                "nombre": "Es Jesucristo mi Todo",
                "alabanza": "1\nEs Jesucristo mi todo, dulce es cantar su Loor\nOh cuán sublime e infinito es su divino amor\nCuando me vio errante, cuál hijo pródigo\nVino a buscar y a salvarme, a su redil me llevo.\n\nCORO\nCristo, oh Cristo, tú eres mi Salvador.\nCristo, oh Cristo, tuyo seré Señor\nTe seguiré donde quieras, si tú guiándome vas\nY al terminar mi carrera en gloria veré tu faz.\n\n2\nCristo es el lirio del Valle, la rosa de sarón\nCristo el radiante Lucero, la Roca de Salvación\nÉl es la fuente de vida, mi gozo eternal\nYa satisface mi alma con él Maná celestial.\n\n3\nCristo nació en un pesebre, la amarga copa bebió\nCuál inocente Cordero en el calvario murió\nResucitó de la tumba, y al cielo ascendió\nMás pronto viene en su gloria, esta promesa nos dio.\n"
              },
              {
                "idalabanza": 127,
                "numhimnario": 102,
                "nombre": "¿Eres Limpio en la Sangre?",
                "alabanza": "1\n¿Has hallado en Cristo plena salvación\nPor la sangre que Cristo vertio?\nToda mancha lava de tu corazón\n¿Eres limpio en la sangre eficaz?\n\nCORO\n¿Eres limpio, en la sangre?\nEn la sangre de Cristo Jesús\n¿Es tu corazón más blanco que la nieve\n¿Eres limpio en la sangre eficaz?\n\n2\n¿Vives siempre al lado de tu Salvador?\nPor la sangre que El derramó\n¿Del pecado eres siempre vencedor?\n¿Eres limpio en la sangre eficaz?\n\n3\n¿Tendrás ropa blanca al venir Jesús?\n¿Eres limpio en la fuente de amor?\n¿Estás listo para la mansión de luz?\n¿Eres limpio en la sangre eficaz?\n\n4\nCristo ofrece hoy pureza y poder\nOh acude a la cruz del Señor\nEn la Fuente es que limpiará tu ser\nOh, acude a su sangre eficaz."
              },
              {
                "idalabanza": 128,
                "numhimnario": 103,
                "nombre": "Escucha a Jesús",
                "alabanza": "1\nYo hoy a Jesús llamándome, y fui sin dudar a él\nY allí comprendí lo grande de todo su amor y bien\nMe habló de Su grande amor sin fin por mí\nY sangre de sus heridas vi salir\nMás no pude comprender\nLo que sentí, y en sus brazos me arrojé feliz.\n\n2\nEscucha a Jesús llamándote, ven sin tardar a él\nPues él quiere perdonarte y darte favor y bien\nEntonces comprendí su amor allí\nSu sangre te limpiará de todo mal\nY fácil podrás decir Ya soy feliz\nPor la gran eternidad."
              },
              {
                "idalabanza": 129,
                "numhimnario": 104,
                "nombre": "El Cielo de Paz",
                "alabanza": "1\nQue grande bondad es la tuya, mi Dios\nJamás la podré comprender\nQue brindas tu amor a este mundo Señor\nSin quién lo pueda merecer.\n\nCORO\nNo merezco tu amor, soy indigno de el\nHoy las gracias Te doy por tu grande bondad\nY aunque sólo merezco el castigo de ti\nMe llevas al cielo de paz.\n\n2\nAmigo que oyes la voz de Jesús\nPor gracia él te quiere salvar\nRecíbelo ansioso en su gran plenitud\nY dile con migo a Jehová."
              },
              {
                "idalabanza": 130,
                "numhimnario": 105,
                "nombre": "El Corrido de David",
                "alabanza": "1\nLo que yo quiero contarles\nes algo real que paso.\nFue tan tremendo el suceso\nque el mismo valle tembló\ncuando Goliat cayo al suelo\nporque David le ganó.\n\nCORO\nEra hijo de Isai\nde la simiente de Abraham\naquel mancebo valiente\nde la tierra de Judá.\n\n2\nCuando llegó al alcornoque\ntodos estaban temblando\nnomas de ver al gigante\ncuándo venia caminando\ncuarenta días con sus noches\nlos estuvo desafiando.\n\n3\nDijo David a Saúl:\nnunca desmayes valiente\nyo quitaré la vergüenza\npara que sepa esta gente\nque nunca debe temer\nlos hijos del Dios viviente.\n\n4\nDijo David al gigante:\naquí termina tu suerte\nte voy a quitar la vida\nyo mismo seré tu muerte\ny así acabó con su vida\ncon una piedra en la frente."
              },
              {
                "idalabanza": 131,
                "numhimnario": 106,
                "nombre": "Escogido fui de Dios",
                "alabanza": "1\nEscogido fui de Dios en el amado\nEn lugares celestiales su proteccion me dio\nAntes de la creacion el plan fue hecho\nPor su santa voluntad\n\nCORO\nEscogido en Cristo estoy nadie me apartará\nNi la fuerzas de este mundo no me podran dañar\nVivo y ando en esta vida con seguridad\nPorque me escogio mi Dios\n\n2\nMe escogio para alabanza de su gloria\nY sentome en las alturas con Cristo mi Señor\nGrande fue la admiracion al ver su gracia\nCuando me escogio mi Dios\n\n3\nTengo un sello que el espíritu me ha dado\nCuando mi confianza puse solo en mi Salvador\nSello que el Señor me dio de vida eterna\nEscogido fui de Dios\n"
              },
              {
                "idalabanza": 132,
                "numhimnario": 107,
                "nombre": "Estoy Luchando",
                "alabanza": "1\nEstoy luchando en un mar embravecido\ntratando de salir del centro de la tempestad\nestoy luchando, luchando contra el viento\ny parece que no avanzo y que las fuerzas se me van.\nLas grandes olas me dicen que es muy tarde\ny nada de este mundo ya me podrá librar.\n\nCORO\nYo estoy luchando, luchando contra\nel viento y parece que no avanzo y que\nlas fuerzas se me van.\n\n2\nPero a lo lejos yo veo una figura\nque viene sobre el agua y me pongo a gritar\n// Jesús Divino no dejes que me hunda\nno dejes que me ahogue, calma la tempestad //"
              },
              {
                "idalabanza": 133,
                "numhimnario": 108,
                "nombre": "El Verano",
                "alabanza": "1\nMira que el verano ya muy pronto viene\nPorque la higuera ya se estremecio\nVe cuantos rumores por el mundo entero\nDe hambres y pestes se aproximan ya\n\nCORO\nAhora date prisa ven a trabajar\nMira cuantas almas se van a quedar\nMira que en el cielo hay un galardon\nLa bella corona de la salvacion\n\n2\nMira el buen Cordero ya viene en las nubes\nA levantar los suyos y los llevara\nPero hay un motivo que es de grande gozo\nAceptar a Cristo porque El viene ya\n\n3\nTu tambien hermano que sigues a Cristo\nYa no crucifiques a tu Redentor\nYa no le desprecies ya no le deshonres\nAboga tu causa y tendras perdon.\n"
              },
              {
                "idalabanza": 134,
                "numhimnario": 109,
                "nombre": "El Número Social",
                "alabanza": "1\nEs el ultimo tiempo, El que estamos viviendo\nEl que entienda aprenda de la Biblia\nCuando el reino de la bestia vendrá\nSe cumplirá como esta en la profecía.\n\nCORO\nNadie podrá comprar ni vender\nSin la marca de la bestia que viene\nEs el numero social del mañana\nSon 3, 6s en la mano o en la frente.\n\n2\nEsa marca en la mano o en la frente\nEs el nombre clave de la bestia\nSerá algo que todos llevarán\nSin importan posesión, tamaño o lengua.\n\n3\nQuien se deje marcar del anticristo\nHa sacado su boleto al infierno\nPues pecado imperdonable ante Dios\nEs dejarse marcar en ese tiempo.\n"
              },
              {
                "idalabanza": 135,
                "numhimnario": 110,
                "nombre": "Este Mundo Infiel",
                "alabanza": "1\nEste mundo infiel a nadie salvará;\nven amigo a Cristo, él te salvará.\nCristo volverá, a las puertas está\ny muchos dudan hoy que Cristo volverá.\n\n2\nEl Rey de Gloria viene\ny sus ángeles consigo a levantar\nsus santos que estén arrepentidos.\nCristo volverá, a las puertas está\ny muchos dudan hoy que Cristo volverá.\n\n3\nLas plagas ya se acercan, nos dice su palabra\nsi tú no te arrepientes\nla destrucción te aguarda.\nCristo volverá, a las puertas está\ny muchos dudan hoy, que Cristo volverá."
              },
              {
                "idalabanza": 136,
                "numhimnario": 111,
                "nombre": "Encontré una paz",
                "alabanza": "1\nEncontré una paz una hermosa paz\nEncontré un amor que infinito amor\n//Encontré un agua que lavó mi ser\nY ahora ya no puedo caminar sin Él//\n\nCORO\nY ahora ya no puedo caminar sin Él\nPorque en él mi fe y i esperanza están\n//Ya no quiero nunca yo volver atrás\nDel pasado triste yo ya me olvidé.//\n\n2\nNunca olvidaré ese día en que\nÉl cambió mi vida y me transformó\nÉl llenó mi alma de felicidad\nY ahora ya no puedo caminar sin Él"
              },
              {
                "idalabanza": 137,
                "numhimnario": 112,
                "nombre": "El Sueño",
                "alabanza": "1\nEstando en mi lecho yo estaba soñando\nque el Señor Jesús había llegado,\n// y todos los fieles fueron levantados\nme quedé llorando pues me había quedado.//\n\n2\nQue terrible sueño, vi que el anticristo\nestaba en el mundo y estaba reinando;\n// y que torturaba con crueles tormentos\naquellos cristianos que se habían quedado.//\n\n3\nQue terrible sueño yo estaba turbado\nbuscaba a mi esposa, y a mis hijos amados,\n// buscaba en la casa por todos los cuartos,\npero era en vano, con Jesús volaron.//\n\n4\nPero despené y todo fue un sueño\ny me levanté yo estaba temblando.\n// Caí de rodillas al cielo implorando\nque cuando él venga yo esté preparado.//"
              },
              {
                "idalabanza": 138,
                "numhimnario": 113,
                "nombre": "Evidencia Pentecostés",
                "alabanza": "1\nQue se vea en mi la gracia de tu Espiritu Señor\nnecesito urgentemente esa manifestación,\nyo no quiero dar un paso mas sin sentir esa virtud\nQue convierte a los perdidos y al enfermo da salud.\n\nCoro\nLa evidencia es para hoy y asi al pueblo pentecostés,\ndebe orar hoy cual Moisés a Dios.\nNo me hagas avanzar,\nsi no tengo tu poder, Señor es mejor aqui quedar.\n\n2\nYo he probado bendiciones mil,\nde las que Dios prometió\nhe visto congregaciones bajo el fuego del Señor,\nLos milagros y señales allí, no se hacen esperar,\nlos creyentes hablan lenguas y al enfermo da salud."
              },
              {
                "idalabanza": 139,
                "numhimnario": 114,
                "nombre": "Exhortación a la Iglesia",
                "alabanza": "1\nLos hermanos de este tiempo\ntodos se están imponiendo\nDe llegar tarde a los cultos.\nY otros a seguir durmiendo.\nEl Señor vendrá de Sión a su iglesia levantar,\nY si tu sigues durmiendo aqui te vas a quedar.\n\nCoro\nSi el Señor viniera hoy,\nque cuenta le vas a dar.\nSeñor estaba durmiendo\nno podía despertar.\n\n2\nLos domingos en la iglesia,\nFalta la congregación,\ntodos están desvelados,\ncausa la televisión.\nUna ofrenda no la dan,\nPorque nadie presente\nmucho menos dan los diezmos\nque a mi Dios pertenece."
              },
              {
                "idalabanza": 140,
                "numhimnario": 115,
                "nombre": "El Sueño de Jacob",
                "alabanza": "1\nUn sueño tuvo Jacob en la ciudad de la luz\nentre el cielo y la tierra una escalera vio\ndel cielo se oyó una voz: yo te bendeciré\nyo Soy Jehová tu Dios, y nunca te dejaré.\n\nCoro\nAngeles que subían\nángeles que bajaban\nla voz de Dios se oía\nlos ángeles callaban\nla hermosa profecía Dios se la revelaba\nmientras Jacob dormía,\nmientras Jacob soñaba.\n\n2\nDel sueño se despertó, su voz temerosa fué,\nésta no es, otra cosa que la casa de Dios\nla puerta del cielo allí Bethel yo la llamaré\nla piedra en que yo dormi\ncomo una señal pondré.\n\n3\nGrande tu simiente haré,\nbendita en ti será,\nla tierra donde tú estás,\na tu simiente daré.\nJaeob hizo un voto alli,\nde todo lo que me des;\nlos diezmos son para ti,\nlos diezmos apartaré."
              },
              {
                "idalabanza": 141,
                "numhimnario": 116,
                "nombre": "Felices los hombres",
                "alabanza": "1\n//Felices los hombres que son perdonados,\ny cuyos pecados ya borrados son. //\n//Siendo renacidos del Espíritu Santo\nPara esperanza viva en Cristo Jesús.//\n\n2\n//Felices las horas que pasa el cristiano\nPostrado en tierra en ferviente oración.//\n//Pidiendo ser llenos del Espíritu Santo\ny ser sus mensajeros de todo valor.//\n\n3\n//Felices los hombres que van proclamando\nde Dios el mensaje de la salvación //\n//Siendo revestidos del Espirito Santo,\nSon testigos fieles de Cristo Jesús.//\n\n4\n//Felices los hombres que viven velando,\nOrando y esperando la venida del Señor.//\n//En un solo instante serán arrebatados\nY entrarán triunfantes al reino eternal.//"
              },
              {
                "idalabanza": 142,
                "numhimnario": 117,
                "nombre": "Fidelidad",
                "alabanza": "1\nCisto fiel te quiero ser,\ndame el poder, dame el poder,\nyo conlgo quiero andar,\nsin vacilar, sin vacilar.\n\nCoro\nEn tus pasos quiero seguir\ncerca de ti cerea de ti\ny si contento pruebas aqui,\ndame confianza en ti.\n\n2\nCon Jesús yo quiero hablar,\nsólo con El, sólo con El\npaz y gozo yo tendré,\nAl serle fiel, al serle fel.\n\n3\nDame ardiete corazón\nLleno de amor, lleno de amor,\ny tu Espiritu Señor\ncomo guiador, como guiador.\n\n4\nCada día quiero hacer\ntu voluntad, tu voluntad,\ny servirte a ti Señor,\nen humildad, en humildad."
              },
              {
                "idalabanza": 143,
                "numhimnario": 118,
                "nombre": "Fue un hombre con distinta suerte",
                "alabanza": "1\nFue un hombre con distinta suerte\nAunque fue de tan buen corazón\n// Sus palabras causaron la muerte\npor decir que era Rey y Señor. //\n\n2\nVió el mundo en terrible Pobreza\nen pesebre de bestias, nació la corona\n// de la corte celeste, gloria\ny honra al cordero de Dios.//\n\n3\nHerodes muy enfurecido\nA los niños mandó a degollar.\n// Al Mesias es al que perseguía\nQue ha nacido en Belén de Judá. //\n\n4\nPero un ángel le envió para Egipto\na pasar la gran tribulación\n// Desde entonces Jesús ha provisto\na su pueblo una gran salvación. //\n\n5\nLo llevaron hasta el pretorio\nlo azotaron los siervos de Caifás,\n// pero entonces estaba en presencia\nun anciano llamado Anás.//\n\n6\nNi la luna ni el sol alumbraron\ny la tierra se estremeció.\n// Las ovejas toditas lloraron\npor la muerte de su buen Pastor. //\n\n7\nEl dolor fue para el inocente\ny asombro a la humanidad.\n// La victoria es para los creyentes\nque han venido su nombre aceptar.//"
              },
              {
                "idalabanza": 144,
                "numhimnario": 120,
                "nombre": "Firmes y adelante",
                "alabanza": "1\nFirmes y adelante, huestes de la te\nsin temor alguno que Jesús nos ve\njefe soberano, Cristo al frente va\ny la regia enseña tremolando está.\n\nCoro\nFirmes y adelante huestes de la fe\nsin temor alguno que Jesús nos ve.\n\n2\nAl sagrado nombre de nuestro adalid\ntiembla el enemigo y huye de la lid\nnuestra es la victoria, dad a Dios loor\ny óigalo el averno lleno de pavor.\n\n3\nMuévase potente la Iglesia de Dios\nde los ya gloriosos marchemos en pos\nsomos un solo cuerpo y uno es el Señor\nuna esperanza y uno nuestro amor.\n\n4\nTronos y coronas pueden perecer,\nde Jesús la Iglesia fiel habrá de ser\nnada en contra suya prevalecerá\nporque la promesa nunca faltará.\n"
              },
              {
                "idalabanza": 145,
                "numhimnario": 121,
                "nombre": "Guarda el Contacto",
                "alabanza": "1\n¿Quieres sobre el mundo ser un vencedor?\n¿Quieres tu cantar aún cuando hay dolor?\n¿Quieres ser alegre cual fiel luchador?\nGuarda el contacto con el Salvador.\n\nCoro\nGuarda el contacto con el Salvador\nLuego las tinieblas no te cubrirán;\nPor la senda alegre tú caminarás\nSi el contacto guardas con el Salvador.\n\n2\nEn el mundo hay muchos, tristes en pecar,\ncuyos corazones lloran de pesar\ndale el mensaje no hay que callar\nCon Dios el contacto debes de guardar.\n\n3\n¿Quieres tú con Dios la comunión tener\nY su gloria siempre en ti permanecer?\n¿Que el mundo a Cristo pueda en ti hoy ver?\nGuarda el contacto con el Salvador.\n\n4\nDeja que el Espíritu implante en ti\nLa humildad de Cristo y su Santo amor:\nOra siempre y vela que Jesús vendrá\nGuarda el contacto con el Salvador."
              },
              {
                "idalabanza": 146,
                "numhimnario": 122,
                "nombre": "Gracias Cristo Bendito",
                "alabanza": "1\nTu me encontraste a mi Señor no te buscaba\ny me diste consuelo cuando en penas vagué\nsentí la paz del cielo que mi alma deseaba\nsentí que las llenabas, sentí que las llenabas,\nde tu santo poder.\n\nCoro\nGracias Cristo bendito, gracias porque me amas\ngracias te da mi alma por la paz que me das\ngracias por este cántico con que puedo alabarte\ny gracias por las fuerzas que me das para amarte\ncada día más y más.\n\n2\nHacia un profundo abismo de lodo cenagoso\nsólo me conducía. mi diario caminar,\nmas el Cristo triunfante se cruzó en mi camino\ny cambió mi destino, y cambió mi destino\npor su senda de paz."
              },
              {
                "idalabanza": 147,
                "numhimnario": 123,
                "nombre": "Glorioso Regreso",
                "alabanza": "1\nHoy es un dia glorioso, hoy es un din de fiesta.\nEl rapto de la iglesia se va a verificar,\nya se va de esta tierra, el pueblo redimido.\nJesús ha prometido que lo vendrá a llevar.\n\nCoro\nNo vez como este mundo se hunde en la miseria.\nNo vez como las guerras, lo azotan sin piedad.\nNo vez como se impone el hambre y la violencia.\nSe extingue la vergüenza, no existe la moral.\nNo vez que el pueblo santo, se siente conmovido\nY muchos han caido, ante el cruel vendaval.\nEstas son las señales del glorioso regreso.\nDel Rey del universo. del Príncipe de Paz.\n\n2\nEl glorioso regreso del señor Jesucristo..\nPara quien no esté listo será lamentación.\nPorque al irse la iglesia, comenzará el conflicto.\nY se dará principio a la Gran Tribulación."
              },
              {
                "idalabanza": 148,
                "numhimnario": 124,
                "nombre": "Gozo la Santa Palabra al leer",
                "alabanza": "1\nGozo la Santa Palabra al leer,\ncosas preciosas alli puedo ver.\nY en la más bella que el buen redentor\nTiene a los niños muy tierno amor.\n\nCoro\nCon tierno amor me ama Jesús.\nMe ama Jesús, me ama Jesús.\nCon tierno amor me ama Jesús.\nMe ama aún a mi.\n\n2\nMe ama Jesús, pues al mundo bajó.\nY por salvarme su vida entregó.\nA sus dtscipulos El dijo asi:\nDejad que los niños vengan a mi.\n\n3\nCuando yo esté en la celeste mansión,\nesta por siempre será mi canción:\n¡Oh buen Jesús!, te bendigo yo a ti;\n¡Que maravilla!, me amaste tu a mi."
              },
              {
                "idalabanza": 149,
                "numhimnario": 125,
                "nombre": "Galardón",
                "alabanza": "1\nEspera al pecador mi Señor\nQue venga a sus pies con amor\nQuiere darte hoy de su gran poder.\nQuiere darte entrada a su mansión.\n\nCoro\n// Galardón, tengo en gloria.\nDonde está mi Jesús mi Rey. //\n\n2\nTan cruel fue la muerte del Señor.\nQue en una cruz allí expiró\nFue por ti. por mi lo que el sufrió\nNunca, nunca podremos a El pagar.\n\n3\nSi sirvo a mi Señor con amor\nMe espera un galardón mis allá.\nSi en la tumba estoy. y si yo fui fiel:\nEl señor desde allí me levantará."
              },
              {
                "idalabanza": 150,
                "numhimnario": 126,
                "nombre": "Getsemaní",
                "alabanza": "1\nOrando al Padre está Jesús,\nSufriendo está en Getsemaní,\ny en su rostro refulgente,\nsudor de sangre hallares.\n\nCoro\nGetsemaní hondo recuerdo...\nGetsemaní, lugar hermoso...\nAlli contemplo arrodillado\nal hijo eterno de mi Dios.\n\n2\nEl alma de mi buen Jesús\nhasta la muerte triste está,\nbebiendo el cáliz de amartgura,\npara salvar al pecador.\n\n3\nEn el pretorio tiene paz\naunque azotado con furor.\nY de espinas la corona\nciñe en la frente mi Jesús.\n\n4\nYa le clavaron en la cruz\nvele sangrando pecador,\npor tus maldades ha sufrido\ncruel ignominia y gran dolor."
              },
              {
                "idalabanza": 151,
                "numhimnario": 127,
                "nombre": "Háblame Señor",
                "alabanza": "ñ1\nHáblame señor si estoy dormido\nque pueda sentirme siempre fiel\nque pueda yo en tu altar estar sirviendo\ny en tu templo vivir como Samuel.\n\nCoro\nDespiértame del sueño para oírte\ny dame un corazón como David.\nQue yo como Samuel pueda decirte\nSeñor tu siervo escucha, ¡heme aqui!\n\n2\nHáblame Señor quo yo despierte\ny yo como Samuel responderé,\nsi útil debo ser hasta la muerte\nordena lo que quieras; yo lo haré.\n\n3\nMándame Señor con tu mensaje\ny dadme el aceite de la unción\nque lleve tu mensaje cuan alegre\ntener tu bendición como Samuel."
              },
              {
                "idalabanza": 152,
                "numhimnario": 128,
                "nombre": "Hallé un buen amigo",
                "alabanza": "1\nHallé un buen amigo mi amado Salvador,\ncontaré lo que Él ha hecho para mi;\nhallándome perdido e indigno pecador,\nme salvó y hoy me guarda para si.\nMe salva del pecado, me guarda de Satán,\npromete estar con migo hasta el fin;\nÉl consuela mi tristeza, me quita todo afán,\nGrandes cosas Cristo ha hecho para mi.\n\n2\nJesús jamás me falta, jamás me dejará,\nes mi fuerte y poderoso protector;\ndel mundo me separa y de la vanidad,\npara consagrar mi vida al Señor.\nSi el mundo me persigue, si sufro tentación,\nconfiando en Cristo puedo resistir.\nLa victoria me es segura, y elevo mi canción;\ngrandes cosas Cristo ha hecho para mi.\n\n3\nYo sé que Jesucristo muy pronto volverá,\ny entretanto me prepara un hogar,\nen la casa de mi Padre, mansión de luz y paz,\ndo el creyente fiel con Él ha de morar.\nLlegándome a la gloria, ningún pesar tendré,\ncontemplaré su rostro siempre allí,\ncon los santos redimidos gozoso cantaré;\ngrandes cosas Cristo ha hecho para mi."
              },
              {
                "idalabanza": 153,
                "numhimnario": 129,
                "nombre": "Hay poder en la oración",
                "alabanza": "1\nDadme poder, Señor en la oración,\nDadme poder, Señor para vencer,\nDadme poder como el profeta Elías\nQue apartó las aguas y así pudo pasar.\n\n2\nCuando él oró que no cayese lluvia,\ny no cayó por tres años y medio,\ndespués oró para que cayese lluvia,\ndespués de ver la lluvia,\noh Dios, dame el poder.\n\n3\nElías fué profeta de valor,\ncuando el oró respóndeme por fuego,\ny descendió del cielo aquel fuego,\nconsumió el sacrificio, ¡oh Dios!\npor tu poder.\n\n4\nElías recibió su recompensa,\ndespués de haber cumplido su misión;\ny el se fué en un carro de fuego\ny dejó de sucesor al profeta Eliseo."
              },
              {
                "idalabanza": 154,
                "numhimnario": 130,
                "nombre": "Hay Poder en Jesús",
                "alabanza": "1\n¿Quieres ser salvo de toda maldad?\nTan solo hay poder en mi Jesús\n¿Quieres vivir y gozar santidad?\nTan sólo hay poder en Jesús.\n\nCoro\nHay poder, poder, sin igual poder,\nen Jesús, quien murió.\nHay poder, poder, sin igual poder,\nen la sangre que Él vertió.\n\n2\n¿Quieres ser libre de orgullo y pasión?\nTan sólo hay poder en mi Jesús.\n¿Quieres vencer toda cruel tentación?\nTan sólo hay poder en Jesús.\n\n3\n¿Quieres servir a tu Rey y Señor?\nTan sólo hay poder en mi Jesús.\nVen y ser salvo podrás en su amor.\nTan sólo hay poder en Jesús."
              },
              {
                "idalabanza": 155,
                "numhimnario": 131,
                "nombre": "Hoy es tiempo de venir",
                "alabanza": "1\nHoy es tiempo de venir\ny escuchar, pecador.\nQue te llama el Señor, que te llama el Señor\nahora ven pecador.\n\nCoro\nQué glorioso será, cuando venga el Señor\nAl entrar por las puertas de aquellas mansiones\nQue nos fue a preparar!\n\n2\nNo dudes pecador, que Dios perdonará.\nEn la cruz enclavados serán los pecados\nDel más vil pecador.\n\n3\n¡Oh qué triste será para el mundo traidor.\nCuando venga el dia de fuego ardiente\nDel gran juicio final!"
              },
              {
                "idalabanza": 156,
                "numhimnario": 132,
                "nombre": "Hoy soy feliz, sí muy feliz",
                "alabanza": "1\nConfieso ahora de mi vida ciega\ndonde vivía sin fe, sin luz ni amor,\nni una esperanza mi corazón hallaba\nni medicina para mi cruel dolor.\n\nCoro\nHoy soy feliz, si muy feliz,\nal ser testigo por la gracia soy feliz,\nhe pasado de muerte a eterna vida,\nuna vida sin fin de gozo y paz.\n\n2\nPerdido andaba yo sin rumbo fijo\nhasta que un día reconocí a Cristo,\ndonde murió el tierno y amado hijo\nSanto Cordero que nos trajo la luz.\n\n3\nSólo en la fuente que salta para la vida,\npodrá saciar su sed el pecador,\ny luego ríos cristalinos de agua viva,\ncorrerán de su vientre sin fin.\n\n4\nVen pecador, ven no te detengas\nque esa fuente es la sangre de Jesús,\ndonde las almas cautivas han hallado\nun camino de amor, de vida y y luz.\n"
              },
              {
                "idalabanza": 157,
                "numhimnario": 133,
                "nombre": "Hubo quien por mis culpas",
                "alabanza": "1\nHubo quien por mis culpas, muriera en la cruz,\naún indigno y vil como soy\nyo soy feliz, pues su sangre vertió mi Jesus\ny con ella mis culpas borró.\n\nCoro\nMis pecados llevó, en la cruz do murió\nel Sublime, el Tierno Jesús\nlos desprecios sufrió y mi alma salvó\nÉl cambió mis tinieblas en luz.\n\n2\nEl es Tierno y amante cual nadie lo fue\npues convierte al infiel corazón\ny por esa paciencia y ternura yo sé\nque soy libre de condenación.\n\n3\nEs mi anhelo constante a Cristo seguir\nmi camino su ejemplo marcó\ny por darme la vida Él quiso morir\nen su cruz mi pecado clavó.\n"
              },
              {
                "idalabanza": 158,
                "numhimnario": 134,
                "nombre": "Hazme un palacio",
                "alabanza": "1\nHazme un palacio, cerca de Cristo\ndile a los ángeles, que pronto iré\nno importa cuándo, yo ya estoy listo,\ncon tal que cerca, de Cristo esté.\n\n2\nNo tengo riquezas, ni reinos mundanos\nmas en el cielo, mi celeste hogar\nen aquel palacio, hecho por sus manos,\ncerca de Cristo, voy a morar.\n\n3\nHazme un palacio, cerca de Cristo\ndile a los ángeles, que pronto iré\nno importa cuándo, yo ya estoy listo\ncon tal que cerca, de Cristo esté."
              },
              {
                "idalabanza": 159,
                "numhimnario": 135,
                "nombre": "Hay una senda",
                "alabanza": "1\nHay una senda que el mundo no conoce\nhay una senda que yo pude encontrar\nen Cristo tengo la salvación de mi alma\nCristo es la senda que me puede salvar.\n\n2\nLas amistades y todos mis parientes\nfueron las gentes que yo relacioné\nme aborrecieron por causa de su nombre\ncuando supieron que a Cristo me entregué.\n\n3\nAquel camino de tantos sufrimientos\naquel camino que Cristo me trazó\nfue transformado en aquel feliz momento\ncuando mi Cristo a mi me rescató."
              },
              {
                "idalabanza": 160,
                "numhimnario": 136,
                "nombre": "Jehová es mi Pastor",
                "alabanza": "1\nJehová es mi pastor, nada me faltara,\nen todo lugar pastos me dará;\njunto a sus aguas de reposo,\nJehová me pastoreará.\n\n2\nJehová confortará mi alma\nguiarame por sendas justas.\nY caminaré en justicia\nen nombre de mi Jehová.\n\n3\nAunque ande en valle de muerte\nno temeré mal alguno;\nporque Jehová conmigo estará,\ny El me sustentará.\n\n4\nDelante del mundo me alimentará.\nÉl me ungirá con aceite;\nmi copa estará rebozando\nmi mesa El me servirá.\n\n5\nLa misericordia junto con el bien\nme seguirá en mis días\ny en la casa de mi Padre\ncon Jehová yo moraré."
              },
              {
                "idalabanza": 161,
                "numhimnario": 137,
                "nombre": "Jesús yo he prometido",
                "alabanza": "1\nJesús yo he prometido, servirte con amor.\nConcédeme tu gracia mi amigo y Salvador,\nno temeré la lucha si Tú a mi lado estás\nni perderé el camino si Tú guiando vas.\n\n2\nEl mundo está muy cerca y abunda en tentación,\nsuave es el engaño, y es necia la pasión;\nVen tú, Jesús más cerca, mostrando tu piedad,\ny escuchad el alma mia de toda iniquidad.\n\n3\nCuando mi mente va, ya incierta, ya veloz\nConcédeme que estreche, Jesús tú clara voz,\nanímame si paro, inspírame también;\nrespóndeme, si temo en todo hacer el bien.\n\n4\nJesús, tú has prometido a todo aquel que va\nsiguiendo tus pisadas que al cielo llegará.\nSostenme en el camino, y al fin con dulce amor\ntrasládame a tu gloria, mi amigo y salvador."
              },
              {
                "idalabanza": 162,
                "numhimnario": 138,
                "nombre": "Jesús Predicó",
                "alabanza": "1\nJesús predicó por tres años y medio\nLa doctrina de amor que su Padre le dió;\nEse fue el ministerio que Jesús consumó,\nPredicando a los hombres su feliz salvación.\n\nCoro\nPorqué no dices: Reconozco que soy\nUn vil pecador, perdóname Señor;\n//Quiero tener el derecho de entrar\nA esa gloria de honor para siempre gozar.//\n\n2\nYo soy el camino, la verdad y la vida.\nNadie viene al Padre si no fuera por mi.\nPredica Jesús: Yo soy la puerta,\ny el que por mi entrare, éste salvo será.\n\n3\nVenid y entrad, por esa puerta.\nAhora que está abierta todos puedan entrar.\nViene la hora en que se cierra,\nEntonces no podréis por esa puerta entrar."
              },
              {
                "idalabanza": 163,
                "numhimnario": 139,
                "nombre": "Jesús me Salvó",
                "alabanza": "1\nFui un ciego que en el camino andaba\nmuy lejos de mi Salvador, sin mirar esa luz que\nme alumbrará, la luz del Eterno Redentor\ny los pasos de Jesús me alcanzaron\nCuando yo iba perdido en el error\n// Fue mi Cristo bendito que me hablaba\nCon su tierna voz llena de amor.//\n\n2\nFui un ciego tan necio en mi camino\nQue a lo profundo del mar me encaminé.\nFui víctima que en garras de las olas\nPor momentos me sentía fallecer; pero Cristo tan\ntierno en su cariño, me ofrecía salvarme del error.\n//De una muerte tan cruel que me esperaba\nen las garras del mundo engañador.//\n\n3\nUna luz esplendente de consuelo\nEnfocó a mi pobre corazón: fue la luz del\nprecioso evangelio, la palabra que me trae salvación.\nNo podía menos que alcanzar mis ojos\ncontemplando al que murió en la cruz,\n//Y extenderle mi temblorosa mano.\nAceptando en mi alma a Jesús.//\n\n4\nAhora canto gozoso a mi Cristo\nQuien salvó mi alma del turbión.\nEl fue muerto un día en la cruz\nsolamente por darnos salvación. Y si tú, amigo\nestás cansado, y agobiado a punto de morir,\n//ven a Cristo, entrégale hoy tu vida\nÉl te quiere hoy mismo hacer vivir.//"
              },
              {
                "idalabanza": 164,
                "numhimnario": 140,
                "nombre": "Jesús es mi Rey Soberano",
                "alabanza": "1\nJesús es mi rey soberano\nmi gozo es cantar su loor\nes Rey me ve cual hermano\nes Rey y me imparte su amor\ndejando su trono de gloria\nme vino a sacar de la escoria\ny yo soy feliz, y yo soy feliz, con Él.\n\n2\nJesús es mi amigo anhelado\ny en sombras o en luz siempre va\nPaciente y humilde a mi lado\nsu ayuda y consuelo me da\npor eso contento le sirvo\nporque El es mi Rey y mi Amigo\ny yo soy feliz, y yo soy feliz, con Él.\n\n3\nSeñor, qué pudiera yo darte\npor tanta bondad para mi\nme basta servirte y amarte\nes todo entregarme yo a Ti\nentonces acepta mi vida\nque a Ti solo queda rendida\npues yo soy feliz,\npues yo soy feliz, por Él."
              },
              {
                "idalabanza": 165,
                "numhimnario": 141,
                "nombre": "Jerusalen",
                "alabanza": "1\nUna noche con la luna Cristo lloraba,\ny contemplando la ciudad Santa,\n¡Oh! Jerusalen la hermosa, tú que has matado.\nCuántos te ha enviado mi Padre Dios.\n\nCoro\n¡Oh! Jerusalen, Jemsalem ciudad de Sión,\nLlora por ti hoy mi corazón.\nComo el ave al hijo le da siempre protección\nVine a traerte salvación.\n¡Oh! Jemsalem la hermosa, tú que has matado.\nCuántos te ha enviado mi Padre Dios.\n\n2\nUna Iglesia floreciente hoy ha nacido\nDel lado herido por mis maldades.\nSi tú habitas protegido por Jesucristo.\nTe encuentras listo para ir con Él.\n\n3\nY cuando Jesús moría en cruz clavado\nAl vil malvado Él bendecía.\nSi tú aceptas hoy la sangre que ha derramado\nSerás llevado a Jerusalen"
              },
              {
                "idalabanza": 166,
                "numhimnario": 142,
                "nombre": "Juventud Marchad",
                "alabanza": "1\nSoldados todos somos del ejército celestial\ny tenemos que luchar, haciendo conocer,\nEstas nuevas de gran Poder.\nY las almas se puedan salvar.\n\nCoro\nJuventud, tomad la armadura toda de Dios;\nBien ceñido estad: cota, cinto, escudo de la fe,\nJuventud, marchad adelante las almas traed.\nSomos los embajadores del Señor Jesús.\n\n2\nFuerza la de Sansón y valientes como David,\nSabios como Salomón, la humildad de José\nY con todo el amor de Juan\nY la fidelidad de Moisés.\n\n3\nGloria al Salvador, nuestro guía y libertador,\nQue del mundo nos sacó, suyo es todo poder,\nEl imperio de su majestad,\nGloria, gloria, por la eternidad."
              },
              {
                "idalabanza": 167,
                "numhimnario": 143,
                "nombre": "Junto a la Cruz",
                "alabanza": "1\nJunto a la cruz do Jesús murió,\nJunto a la cruz salvación pedí.\nYa mis maldades El perdonó.\nA su nombre gloria!\n\nCoro\nA su nombre gloria.\nA su nombre gloria!\nYa mis maldades Él perdonó.\nA su nombre gloria!\n\n2\nJunto a la cruz donde le busqué\ncuan admirable perdón me dio!\nYa con Jesús siempre viviré.\nA su nombre gloria!\n\n3\nFuente preciosa de salvación\nque grande gozo yo puedo hallar,\nal encontrar en Jesús perdón!\nA su nombre gloria!\n\n4\nTú pecador que perdido estás,\nhoy esta fuente ven a buscar\nPaz y perdón encontrar podrás.\nA su nombre gloria!"
              },
              {
                "idalabanza": 168,
                "numhimnario": 144,
                "nombre": "Jesucristo por su Iglesia Viene Ya (E)",
                "alabanza": "1\nJesucristo por su iglesia viene ya,\nViene ya, viene ya.\nY su pueblo redimido listo está,\nListo está, listo está.\n\nCoro\nTú no debes de quedarte,\nAhora puedes prepararte\nY con Cristo por los siglos vivirás\nEl ha dicho en su palabra\nQuien su corazón le abra,\nEn la casa de mi Padre morará.\n\n2\nCristo dice; tus pecados quitaré,\nVen a mi, ven a mi.\nReconoce que mi vida di por ti,\nDi por ti, di por ti.\n\n3\nTu serás perdonado si aborreces el pecado.\nY acudes a la fuente carmesí.\nSerá tu alma emblanquecida\nY en el libro de la vida\nPor la eternidad tendrás tu nombre allí."
              },
              {
                "idalabanza": 169,
                "numhimnario": 145,
                "nombre": "Jesucristo que tanto me amaste",
                "alabanza": "1\nJesucristo que tanto me amaste,\nEntregando tu vida por mi;\n//Por eso alabo tu nombre bendito\ny esas manos que clavadas fueron. //\n\n2\nTus discípulos te abandonaron\ny uno de ellos te entregó;\n//Como ladrón te arrebataron,\nno teniendo de ti compasión.//\n\n3\nTe llevaron ante Pilato\ny el pueblo se atumultó;\n//Y toditos unidos gritaron:\nCrucificale que es un traidor.//\n\n4\nTe sacaron para el Calvario\ny cargaste la cruz del dolor;\n// Allí clavaron tu cuerpo bendito\nporque amaste al mundo pecador.//"
              },
              {
                "idalabanza": 170,
                "numhimnario": 146,
                "nombre": "Las Promesas de Jesús",
                "alabanza": "1\nTodas las promesas del Señor Jesús\nSon apoyo poderoso de mi fe;\nMientras luche aqui buscando yo su luz\nSiempre en sus promesas confiaré.\n\nCoro\nGrandes, fieles,\nLas promesas que el Señor Jesús ha dado,\nGrandes, fieles,\nEn ellas para siempre confiaré.\n\n2\nTodas sus promesas para el hombre fiel,\nEl Señor en sus bondades, cumplirá,\nY confiado sé que para siempre en El,\nPaz eterna mi alma gozará.\n\n3\nTodas las promesas del Señor serán,\nGozo y fuerza en nuestra vida terrenal;\nEllas en la dura lid nos sostendrán,\nY triunfar podremos sobre el mal."
              },
              {
                "idalabanza": 171,
                "numhimnario": 147,
                "nombre": "La biblia es la bandera",
                "alabanza": "1\nLa biblia es la bandera de la ciudad eterna;\nSus franjas, Sus estrellas nos hablan de su amor;\nLugar de redimidos, refugio de mi Cristo.\nComprados con su sangre\nA precio de expiación.\n\nCoro\nYo soy un ciudadano de la ciudad eterna\nPor fe fui recibido y hoy ciudadano soy.\nEs Cristo el gobernante de esa gloriosa tierra\nQue al flotar su bandera anuncia redención.\n\n2\nSesenta y seis estrellas que hay en mi bandera,\nrepresentan los libros que en ella encontrarás,\nSus franjas son doce\nSus tribus representan, y el asta\nQue en ellas flota es el cordero de Dios.\n\n3\nDe todo pueblo y raza, de toda tribu y lengua\nSea formado una patria en la celeste Sión;\nAhi todos reunidos bajo de esa bandera\nCantaremos en gloria, en paz y redención.\n"
              },
              {
                "idalabanza": 172,
                "numhimnario": 148,
                "nombre": "La Final Trompeta",
                "alabanza": "1\nMuy pronto oiremos la final trompeta,\nLuchemos firmes, no hay que vacilar;\nPues esperemos más y más alertas\nQue Cristo viene su iglesia a levantar.\n\n2\nViene a llevar a su pueblo escogido,\nPara librarlo de la gran tribulación;\nTodos aquellos que le han obedecido,\nQue le han seguido de todo corazón.\n\n3\nEl muy bien sabe que aqui sufrimos,\nSu poder glorioso nos viene a consolar;\nTodas las pruebas y luchas que sufrimos,\nEs la esperanza que ya van a terminar.\n\n4\nEs la esperanza que Cristo ha prometido,\nQue allá en el cielo nos prepara un hogar;\nNo desmayemos, que si El no ha descendido,\nEs porque tiene otras ovejas que salvar."
              },
              {
                "idalabanza": 173,
                "numhimnario": 149,
                "nombre": "La perdida oveja",
                "alabanza": "1\nEl sol se va ocultando tras los pinares\nviene la negra noche con su pavor,\npor valles y collados por los zarzales\nen busca de su oveja va el buen pastor.\n\nCoro\nEres tú, eres tú, eres tú la oveja\nla oveja perdida que busca el pastor.\nEres tú, eres tú, eres tú esa oveja\nque fuiste comprada con sangre y amor;\nven a mi, mi perdida oveja\ndesde aquí escuché tu queja\ny he venido a buscarte\ny conmigo llevarte al redil.\n\n2\nVa despertando el alba y en sus raudales\nbrota un canto de vida, luz y color,\npor sendas espinosas, por los brenales\nbuscando aún su oveja ya el buen pastor."
              },
              {
                "idalabanza": 174,
                "numhimnario": 150,
                "nombre": "La Cruz Me Guiará",
                "alabanza": "1\nAl calvario sólo Jesús ascendió\nLlevando pesada cruz,\nY al morir en ella al mortal dejo\nFanal de gloriosa luz.\n\nCoro\nLa cruz solo me guiara,\nLa cruz solo me guiara,\nA mi hogar de paz y eterno amor;\nLa cruz solo me guiará.\n\n2\nEn la cruz, el alma tan solo hallara\nLa fuente de inspiración;\nNada grande y digno en el mundo habrá\nQue en la cruz no halle aprobación.\n\n3\nYo por ella voy a mi hogar celestial,\nEl rumbo marcado esta;\nMi obscura vida será el final\nY a su luz mi alma siempre."
              },
              {
                "idalabanza": 175,
                "numhimnario": 151,
                "nombre": "La Triste Oveja",
                "alabanza": "1\nSoy la triste oveja que dejó al pastor.\nYo andaba perdida\nCuando Él me encontró,\nCon un silbo suave luego me llamó,\nY hallóme gimiendo de acerbo dolor.\n\nCORO Las noventa y nueve dejó en el redil,\nY se fue al desierto a buscarme a mí,\nCon afán inmenso luego me llamó,\nY en sus brazos al dulce hogar me llevó,\n\n2\nVen mi triste oveja, escucha mi voz,\nNo me desconozcas\nSoy tu buen pastor.\nVamos al rebaño do reina la paz,\nAllá donde mora mi rey celestial.\n\n3\nSi por la fatiga no puedes andar,\nVen que entre mis brazos te puedo llevar.\nVen mi triste oveja vamos al redil,\nQue muy tierno pasto tengo para ti\nConmigo por siempre tú vas a vivir"
              },
              {
                "idalabanza": 176,
                "numhimnario": 152,
                "nombre": "La Última Milla Del Camino",
                "alabanza": "1\nSi camino por recto sendero\nSi trabajo cumpliendo un deber.\nCuando mi último viaje termine\nAl gran Rey admirable veré,\n\nCoro\nCuando el tramo postrer llegue al fin\nDe mi vida encamino hacia él\nHasta entonces diré Soy feliz\nCuando el último paso yo de.\n\n2\nSi la historia de Cristo proclamo\nSi perdidas ovejas hallé\nMostraráme el Señor su grandeza,\nCuando en la última milla yo este.\n\n3\nFaros lazos habrán de ser rotos\nCon gemidos de angustia, al partir\nMás todo eso será pasajero,\nCuando deje mi triste existir.\n\n4\nSi aquí yo he ganado la lucha,\nEsforzándome en obedecer\nYo seré arrebatado hacia el cielo\nCuando en la última milla yo este."
              },
              {
                "idalabanza": 177,
                "numhimnario": 153,
                "nombre": "La visión De La Cruz",
                "alabanza": "1\nLargos años vagué, por el valle del mal\nSin consuelo, sin fe, sin amor,\nY la sombra fatal de la senda que hallé,\nPuso en mi alma la hiel del dolor.\n\nCoro\nA mis pies, el infierno se abrió\nY clamé con el alma a Jesús,\nY al instante el infierno cambió\nEn la hermosa visión de la cruz.\n\n2\nDesde entonces por El ya no soy lo que fui\nUna sombra sin Dios y sin ley,\nMi existencia le di y al cantar cual sin ver\nMe constriñe el amor de mi Rey.\n\n3\nEsa carga fatal que en el alma lleváis\nPeregrino que vas por la senda del mal\nVuestra senda sólo es de dolor\nVen y ponla a los pies del Señor.\n\n4\nEs hermoso decir ya no soy lo que fui,\nHoy me impulsa el amor de Jesús;\nSus palabras oí Y hoy ansío morir\nAbrazando por siempre su cruz."
              },
              {
                "idalabanza": 178,
                "numhimnario": 154,
                "nombre": "Los trigales",
                "alabanza": "1\nVagaba yo por el mundo\nEn una noche sin luz\nSabía el nombre de Cristo\nMás no que él era la luz.\n\n2\nSabía bien que en su muerte\nHabía sido en la cruz\nPero que él me amaba tanto\nPero que él me amaba tanto\nNo me lo habían dicho aun.\n\nCORO\n//Oh, oh, oh, oh, tenía trigales mi Señor\nA bellos campos me llevó\nA cultivarlos me mandó//.\n\n3\nY me llamo mi Jesús\nEn dulce tono de voz\nMe dijo yo soy la luz\nCamino del cielo en pos\n\n4\nPues en la cruz yo pagué\nLa deuda del pecador\nY al mirarlo comprendí\nY al mirarlo comprendí\nLa grandeza de su amor"
              },
              {
                "idalabanza": 179,
                "numhimnario": 155,
                "nombre": "La Biblia",
                "alabanza": "1\nLa Biblia surca los tiempos las edades,\nY en su afán nos dice lo que ha de suceder;\nQué maravilla que Dios haya sellado,\nEn un tan solo libro su ciencia y verdad.\n\n2\nEn la agonía de un mundo que perece,\nLa Biblia prevalece como un faro de luz;\nVislumbra vida, esperanza y salvación,\nPara el sediento es la fuente del saber.\n\n3\nPara mi alma la Biblia es el espejo.\nEn ella me reflejo como un hijo de Dios.\nPara la iglesia la Biblia es el escudo.\nTambién es la bandera de la Patria Celestial."
              },
              {
                "idalabanza": 180,
                "numhimnario": 156,
                "nombre": "La Vergüenza De Los Necios",
                "alabanza": "1\nMi casa está fundada en la roca\nPor eso no la mueven tempestades\nPor eso siempre es firme ante los vientos\nPor eso no la arrastran vendavales\nY firme yo camino diariamente\nConfiando en la potencia de mi roca,\nSabiendo que ella permanece fuerte\nY que las tempestades no la tocan.\n\nCoro\nEl necio la fundó sobre la arena\nY grande fue su ruina y su vergüenza\nY tú sufrirás la misma pena\nSi a Cristo que es la roca no te allegas.\n\n2\nQué bueno es vivir confiadamente\nFrente a las amenazas de este mundo\nPor eso amigo ven que Cristo es fuerte\nY en su regazo tú estarás seguro\nY goza de esa dicha permanente\nDe estar sobre la roca de los siglos\nViviendo en su amor eternamente\nLa dulce gloria de los redimidos."
              },
              {
                "idalabanza": 181,
                "numhimnario": 157,
                "nombre": "Limpia Mi Vida",
                "alabanza": "1\nPido Señor, quites de mí, toda maldad,\nLa vanidad, la pretensión y disensión;\nQuita también orgullo Señor, del corazón,\nPorque se bien que al cielo así, no entraré.\n\nCoro\nLimpia mi vida, Señor Jesús,\nInunda mi alma de tu hermosa luz;\nQue al cielo quiero yo entrar y ver tu faz,\nEn tu presencia anhelo estar,\nTambién tu nombre allí alabar,\nQuita de mí, Señor Jesús, toda maldad.\n\n2\nPon en mí ser, bondad y fe para vencer,\nMás caridad, gozo también, mucha más paz;\nBenignidad, anhelo más, mi buen Señor,\nPorque se bien, que al cielo así, yo entraré."
              },
              {
                "idalabanza": 182,
                "numhimnario": 158,
                "nombre": "Los Tiempos Marcados Están",
                "alabanza": "1\nLos tiempos marcando están, palabras proféticas mil,\nQue hablaron tiempos ya, los santos varones de Dios;\nSeñales se ven sin fin, la Iglesia, llevad, será\nA reunirse ira con Cristo, el esposo de amor;\nLos cielos testigos serán.\n\nCoro\nCuando Cristo venga corno Rey, mi Rey será\nY su predominio para siempre durará\nProtegida la Iglesia siempre estará, Oh! Qué gloriosa visión,\nMi tumba burlada será y alegre con. El estaré.\n\n2\nLa ciencia avanzada está, maldades se ven por doquier\nLa guerra haciendo está, consigna del Hombre tenaz,\nLas grandes ciudades ya, cayeron presas del terror,\nUn terremoto les fue presagio de gran resplandor,\nPues Cristo muy pronto vendrá.\n\n3\nAmigo que oyendo estás, que Cristo muy pronto vendrá,\nSalvarte no podrás gozando de un mundo fugaz,\nLa mano de Cristo está tocando a tu corazón,\nEntrégale hoy tu amor, confiésale tu condición,\nY oveja salvada serás."
              },
              {
                "idalabanza": 183,
                "numhimnario": 159,
                "nombre": "Los Mares Y Montañas",
                "alabanza": "1\nLos mares, las montañas, los cielos y las estrellas\nTodas son cosas de Él, por qué no he de alabarte,\nCreyendo en su nombre mil cosas obtendré.\n\nCoro\nEl hace cosas buenas, nos ha dado la vida,\nPaz y tranquilidad, Gloria sea su nombre,\nA Él sea la honra por la eternidad.\n\n2\nSi tu alma está muy triste por cosas de este mundo.\nEl esperando está, perdona tus pecados\nY hace que te apartes de toda iniquidad.\nSon puras vanidades que el mundo nos ofrece\nY vas a fracasar; tu corazón entrega a Cristo el Salvador\nY Él te salvará.\n\n3\nA mi Jesús amado es quien yo les predico\nQue Él es la verdad, mi hogar lo llena siempre\nDe ricas bendiciones también de sanidad;\nTodos agradecidos, cantemos alabanzas\nAl Dios de Israel y siempre reunidos oremos\nPor las almas que se acerquen a Él."
              },
              {
                "idalabanza": 184,
                "numhimnario": 160,
                "nombre": "La Mujer Sabia",
                "alabanza": "1\nAmada hermana sigue adelante\nLuchando firme sin desmayar\n//Porque mí. Cristo muy pronto viene\nY allá en el cielo nos premiará.//\n\nCoro\nSi en esta tierra nos esforzamos\nUna corona él nos dará\n//anda hermana si tú le sirves\nLa vida eterna disfrutarás.//\n\n2\nLa Biblia dice en los Proverbios\nMujer virtuosa quién la hallará\n//la mujer sabia edifica su casa\nMas la necia la derribará.//\n\n3\nY a la iglesia que está luchando\nPronto mi Cristo la llevará\n//Para gozarnos allá en el cielo\nY así estaremos por la eternidad.//"
              },
              {
                "idalabanza": 185,
                "numhimnario": 161,
                "nombre": "Las Cosas Viejas Pasan",
                "alabanza": "1\nAntes de conocerte, yo muchas Cosas hacía;\nPero ahora no, no quiero seguir igual;\nLas cosas viejas pasaron y todas son hechas nuevas,\nPor eso no, no quiero seguir igual.\nAunque el diablo me traiga miles de tentaciones,\nYo no voy a dejarme arrastrar.\n\nCoro\nPor qué yo he de pagarle mal al que me hizo tanto bien\nOh mi Señor ayúdame a serte fiel\nPor qué yo he de pagarle mal al que me hizo tanto bien\nOh mi Jesús ayúdame a serte fiel, \n\n2\nAntes de conocerte, yo muchas cosas hacia;\nPero ahora no, no quiero seguir igual;\nAhora quiero vivir, vivir en santidad\nPara agradarte a ti mi Salvador\nAhora no vivo yo más Cristo vive en mí\nPor eso no, no quiero seguir igual."
              },
              {
                "idalabanza": 186,
                "numhimnario": 162,
                "nombre": "La Peña De Horeb",
                "alabanza": "1\nCristo es la peña de Horeb que está brotando\nAgua de vida, saludable para ti;\nA todo aquel que sufre y va llorando\nLa paz le ofrece por su sangre carmesí.\n\nCoro\nVen a tomarla, que es más dulce que la miel,\nRefresca el alma, satisface nuestro ser;\nCristo es la peña de Horeb que está brotando\nAgua de vida, saludable para ti.\n\n2\nContemplo a Cristo por mí crucificado,\nEn el calvario de rico manantial,\nDe salvación y perdón para el pecado,\nDe vida eterna y de gracia celestial.\n\n3\nOh, pecador, que vas por el desierto.\nEn las candentes arenas del pecar,\nOye la voz que te dice, ven y bebe.\nEs Jesucristo quien te quiere perdonar."
              },
              {
                "idalabanza": 187,
                "numhimnario": 163,
                "nombre": "La Voz Del Rey Divino",
                "alabanza": "1\nPecador, oye la voz del Rey Divino,\nDe los perdidos Él tiene compasión.\nPara todos ha marcado el camino\nQue nos conduce a la celestial mansión.\n\nCoro\nEl espera paciente al pecador,\nPues del pecado nos vino a redimir,\nDemostrando en la cruz su grande amor\nPor nosotros El vino a morir.\n\n2\nSi meditará el pecador profundamente\nQue Cristo el reino nos fue a preparar\nDejaría de mostrarse indiferente;\nViniera a Cristo pronto a aceptar.\n\n3\nTodo aquel que en el mundo ande vagando\nSin encontrar consuelo en su dolor,\nEl Señor tiernamente está llamando,\nEstá ofreciendo perdón al pecador."
              },
              {
                "idalabanza": 188,
                "numhimnario": 164,
                "nombre": "Levántate Y Vela",
                "alabanza": "1\nLevántate y vela, no estés muy confiad\nPorque Jesucristo muy pronto vendrá\n//Porque si tú velas, te estás preparando\nPara irte con Cristo a la eternidad.//\n\n2\nNo pienses quedarte aquí al sufrimiento\nPorque el mundo entero se lamentará,\n//Allí será el lloro y crujir de dientes,\nPorque las estrellas se desplomarán.//\n\n3\nSe llegó el momento del rapto divino\nPorque Jesucristo lo profetizó;\n//Los ángeles cantan con Cristo en el aire\nQue está preparando el reino eternal.//\n\n4\nLevanta tu rostro, mira hacia el Oriente,\nOí los clarines que dan su señal,\n//El sol se oscurece y la tierra tiembla\nPorque ya se acerca el juicio final.//\n\n5\nNo pienses que Cristo te despreciará\nPues El con su sangre tu alma compró,\n//Amigo del alma acepta a Cristo,\nOye los clarines que dan su señal.//"
              },
              {
                "idalabanza": 189,
                "numhimnario": 165,
                "nombre": "Los Ojos De Jehová",
                "alabanza": "1\nLos ojos de Jehová llenos de compasión\nQue desde el cielo azul contemplan la maldad\nEn días de Noé, cuando el hombre sin Dios,\nNo quiso obedecer la voz de su Señor\nY por su rebelión y duro corazón, les alcanzó su mal.\n\n//Y del cielo bajó con todo su furor\nEl juicio destructor del diluvio fatal.//\n\nLos ojos de Jehová abiertos siempre están\nY desde allá pueden mirar el bien\nAllá cuando Israel que cautivo cayó,\nJehová siempre miró a su siervo Daniel\nEs el Dios de ayer, hoy contemplando está\nSi tú haces el bien.\n\n//Y recompensará con la vida eternal\nAl que aborrece el mal y quiere serle fiel.//"
              },
              {
                "idalabanza": 190,
                "numhimnario": 166,
                "nombre": "Loor A Ti Señor",
                "alabanza": "1\nLoor a ti, mi Dios, loor a ti,\nLo grande de tu amor es para mí\n//Me diste un Salvador, Cristo Jesús,\nLoor a ti, Señor, loor a ti.//\n\n2\nGloria a mi Salvador, Cristo Jesús,\nÉl es el pan de vida para mí;\n//Su vida dio por mí allá en la cruz.\n¡Loor a ti, Señor, loor a ti!//\n\n3\n¡Hazme vivir, Señor, cerca de ti!\nLa deuda de tu amor la siento en mí\n//Te entrego a ti mi ser mi corazón.\n¡Loor a ti, Señor, loor a ti!//\n\n4\nQuiero ser limpio hoy de mi maldad,\nAcudo a ti, Jesús, tal como soy,\n//Ven a mí dices tú con tierno amor.\n¡Loor a ti, Señor, loor a ti!//"
              },
              {
                "idalabanza": 191,
                "numhimnario": 167,
                "nombre": "Loor A Ti Mi Dios En Esta Noche",
                "alabanza": "1\nLoor a ti mi Dios en esta noche,\nPor todas las bondades de este día\n¡Oh guárdame, y que tus potentes alas\nSean por siempre la defensa mía!\n\n2\nDe cuantas faltas hoy he Cometido,\nContigo, con el prójimo y conmigo\nPerdóname Señor, por tu Hijo Amado,\nHaz que mi sueño pueda ser tranquilo.\n\n3\nEnséñame a vivir que no me espante\nLa tumba más que el lecho del reposo\nEnséñame a morir para que pueda\nEl día del juicio despertar glorioso.\n\n4\n¡Oh! logre reposar en ti mi vida\nMis párpados los cierre un dulce sueño\nUn sueño que vigor pueda prestarme\nPara servirte al despertar mi dueño."
              },
              {
                "idalabanza": 192,
                "numhimnario": 168,
                "nombre": "Las Campanas Suenan Tristes",
                "alabanza": "1\nLas campanas suenan tristes, como muestra de dolor\nPorque ha muerto una Persona, sin creer en el Señor\nTodo es luto y es tristeza, esperanza ya no hay,\nSólo se oyen los lamentos, los pesares y tormentos,\nY la desesperación.\n\nCoro\nMás cuando muera yo, no deben llorar,\nPorque viviendo estoy, en Cristo El Señor,\nSerá un leve dormir, y un eterno despertar,\nPorque en la mansión de Gloria,\nCoronado de victoria, Cristo me recibirá.\n\n2\nPara aquel que está en Cristo, el morir ganancia es,\nPues pasó de muerte a vida, no hay nada que perder,\nSu esperanza está puesta, en la gran resurrección,\nCuando el Cristo victorioso, le traslade a los cielos,\nA vivir en su mansión."
              },
              {
                "idalabanza": 193,
                "numhimnario": 169,
                "nombre": "Luchemos, Hermanos",
                "alabanza": "1\nLuchemos, hermanos con más anhelo\nY procuremos mejor vivir;\n//Allá en el cielo no habrá más frío\nNi habrá calor, ni hambre, ni sed.//\n\n2\nEs mejor luchar y no desmayar,\nPorque el que lucha llega a vencer;\n//El que venciere se sentará\nCon Dios el Padre en la eternidad.//\n\n3\nYa se preparan en las mansiones\nLos que con Cristo han de venir,\n//A levantar a su Iglesia en alto\nY conducirla a mejor vivir.//\n\n4\nY cuando estemos con Cristo en gloria,\nLa humanidad se lamentará:\n//Sin esperanza de escapar\nPorque el que salva en bodas está.//\n\n5\nPero todavía estás oyendo\nEl gran mensaje de salvación.\n//Antes que venga la destrucción\nHoy a Jesús puedes aceptad.//"
              },
              {
                "idalabanza": 194,
                "numhimnario": 170,
                "nombre": "La Negación de Pedro",
                "alabanza": "1\nCuando Pedro negó a Jesucristo\nFue la causa de su transgresión\nEn verdad ni aún lo he visto;\nY tú me traes esta acusación.\n\n2\nCuando pregunta el siervo del pontífice,\nEntonces Pedro volvió a negar,\nYo te he visto con El en el huerto\nEntonces Pedro volvió a negar.\n\n3\nCuando le dijo al Señor Jesucristo;\nSi es posible por ti moriré\nEn la hora cuando vino la prueba\nSe olvidó del juramento que dio.\n\n4\nCuando le hicieron la tercera pregunta,\nY el gallo cantó en alta voz,\nEntonces Pedro lloró amargamente,\nHumillado ante El Hijo de Dios.\n"
              },
              {
                "idalabanza": 195,
                "numhimnario": 171,
                "nombre": "Llevar La Cruz De Cristo",
                "alabanza": "1\nLlevar la cruz de Cristo a veces es dolor,\nMas Dios nos ha provisto, la senda de su amor.\n\nCoro\nConcédenos Señor Jesús, poder llegar a tu mansión;\nLugar de Santa y plena luz, ciudad de rica bendición.\n\n2\nLa gloria del Calvario, fue la crucifixión\nHirieron su costado, por nuestra rebelión.\n\n3\nLa ley de tu palabra, no es de variación,\nMás bien es la jornada, de nuestra salvación.\n\n4\nDivina esperanza, para la humanidad,\nVerter en abundancia, cual luz en claridad."
              },
              {
                "idalabanza": 196,
                "numhimnario": 172,
                "nombre": "Llamamiento",
                "alabanza": "1\nQuién irá a laborar los campos\nQue el maestro pronto volverá.\n¿Quién escuchará el llamamiento,\nY el mensaje mío predicar?\n\nCoro\nHeme aquí envíame a mí,\nDame todo tu poder;\nLlevaré el fiel mensaje\nYo iré, mi Señor, yo iré.\n\n2\nAlmas hay que van vagando,\nEn el mundo horrendo del pecador,\n¿Quién escuchará el cruel lamento,\nDel que gime en la oscuridad?\n\n3\nDespertad que ya la ciega pasa\nY con ella la oportunidad,\nCosechemos las blancas gavillas\nQue el maestro fiel nos premiará."
              },
              {
                "idalabanza": 197,
                "numhimnario": 173,
                "nombre": "Llegaronse Los Tiempos",
                "alabanza": "1\nLlegaronse los tiempos, cumpliéronse los días\nDe aquellas profecías que el Señor habló.\n//Cuando íbase del templo al monte de los Olivos,\nY con palabras vivas señales nos dejó.//\n\n2\nYa vemos que los tiempos cuan breves van pasando,\nSeñales demostrando que Cristo viene ya.\n//Nos habla por las aguas, nos habla por los vientos\nQue ya se acerca el tiempo que Cristo volverá.//\n\n3\nYa todo está cumplido, ya no hay más que esperar\nSi alguno está dormido hoy puede despertar.\n//En Cristo encontraremos alivio y fiel consuelo.\nYa viene el Rey del cielo su Iglesia a levantar.//\n\n4\n¿Por qué, pues tus pecados a Cristo no dejar?\nPues Él los ha borrado con su muerte en la cruz\n//Él es tu abogado, Él es tu intercesor,\nQue puede hoy librarte en prueba de su amor.//\n"
              },
              {
                "idalabanza": 198,
                "numhimnario": 174,
                "nombre": "Llena De Amor Mi Camino (E)",
                "alabanza": "1\nQuiero andar mi Señor por su senda de amor\nElevandome mas y mas\nPor doquiera impartiendo alegria y solaz\nPero lleno de tu bondad\n\nCORO\nMi sendero de amor llena hoy Señor\nQue tu Espiritu guie mis pies\nY que siempre al andar lleno este de tu amor\nEl camino por donde voy\n \n2\nTenme cerca de ti oh mi buen Salvador\nNo permitas jamas jamas\nQue yo vague sin luz sin destino y sin paz\nMi sendero de amor llena hoy\n\n 3\nLa jornada fugaz pronto terminara\nY no habra mas sufrir alla\nPermitidme cantar al augusto Señor\nMi sendero de amor llena hoy"
              },
              {
                "idalabanza": 199,
                "numhimnario": 175,
                "nombre": "Llévame",
                "alabanza": "1\nQuisiera decirte, Señor, lo que siento\nLa tristeza de mi corazón;\nQuisiera estar cerca, decirte al oído\nDecirte que te amo, bendito Señor.\n\nCoro\nLlévame Oh Cristo! Sí llévame,\nLlévame, Señor, junto a ti,\nLlévame, ¡Oh, Cristo!, Sí llévame;\nQue nada en el mundo me aparte de Ti.\n\n2\nAhora, Señor, que me encuentro a tu lado,\nHuyó la tristeza de mi corazón,\nTu amor me ha llenado, tu amor satisface,\nPor eso te amo, bendito Jesús.\n\n3\nAhora soy tuyo Señor Jesucristo,\nY siempre a tu lado por Ti lucharé,\nSi Tú me iluminas, en Ti yo confío\nHasta que Tú vengas bendito Jesús."
              },
              {
                "idalabanza": 200,
                "numhimnario": 176,
                "nombre": "Llegó El Momento De La Despedida",
                "alabanza": "Llegó el momento de la despedida\n y sollozando nos diremos adiós\n// Sólo confiando que al fin de esta\nvida todos unidos nos iremos al Señor//\n\n2\nY si aquí ya no será posible \nEn esta tierra volvernos a ver\n//Sólo confiando en aquella voz audible \nque nos promete no dejarnos perecer.//\n\n3 \nDios bendiga a mis amados hermanos \nque juntos vamos en peregrinación. \n//Seamos fieles que si perseveramos\ncon Cristo iremos a estar en comunión.// \n\n4 \nNos despedimos con un dolor profundo \nde tan hermosa confraternidad.\n//Pidiendo a Dios que nada de este mundo\n no nos impida vernos en la eternidad.//"
              },
              {
                "idalabanza": 201,
                "numhimnario": 177,
                "nombre": "Malaquías",
                "alabanza": "1\nNo más tristezas, no más dolores en este mundo\nCuando mi Cristo allá descienda entre las nubes\nTodos los fieles y redimidos se irán con El,\nPobre del mundo que ahora goza lamentará.\n\nSi alguna quiere gozar con Cristo en la eternidad,\nQue ya no siga según la carne en la maldad,\nHoy ya es tiempo que obedezcamos, hermanos míos\nAntes que llegue el día ardiente profetizado,\nPor Malaquías.\n\nLa esperanza que hoy tenemos en esta vida\nQue Cristo manda que vigilemos en otras almas\nQue andan perdidas.\nSi alguno quiere venir a Cristo hoy de rodillas\nQue no permita que llegue el día profetizado\nPor Malaquías.\n\nNo nos cansemos, hermanos fieles de anunciar\nQue Cristo dice que la malicia y el orgullo\nSe ha de quedar.\nLas vanas glorias y la jactancia es cosa igual\nQue Cristo dice que con su sangre y sus virtudes\nVino a quitar."
              },
              {
                "idalabanza": 202,
                "numhimnario": 178,
                "nombre": "Más Allá Del Sol",
                "alabanza": "1\nAunque en esta vida no tengo riquezas,\nSé que allá en la gloria tengo mi mansión\nCual alma perdida entre la Pobreza,\nDe mi Jesucristo tuvo compasión.\n\nCoro\nMás allá del sol más allá del sol,\nYo tengo un hogar,\nHogar, bello hogar,\nMás allá del sol.\n\n2\nAsí por el mundo yo voy caminando\nDe pruebes rodeado y de tentación,\nPero Jesucristo que me está probando,\nMe llevará salvo hasta su mansión.\n\n3\nA todas las razas del linaje humano,\nCristo quiere darles plena salvación,\nTambién una casa no hecha de manos\nFue a prepararnos a la Santa Sión.\n\n4\n¿Te estás preparando, querido amigo,\nPara entrar al cielo, gloriosa mansión?\nSi estás descuidado, viviendo perdido,\nTe irás sin duda a condenación."
              },
              {
                "idalabanza": 203,
                "numhimnario": 179,
                "nombre": "Marché Ya De Egipto",
                "alabanza": "1\nMarché ya de Egipto a la tierra de Canaán\nMi Salvador me guiaba con mano de poder\nEl me dio victoria sobre fuego y mar\nY cuando fui salvado ya pude jubilar.\n\nCoro\nEn Egipto ya no me busques más,\nPorque habito ya en tierra de Canaán\nEn Egipto ya no me busques más,\nPorque habito ya en tierra de Canaán.\n\n2\nMi amor lo puse en El y al blanco yo miré\nAndando en el camino mi Canaán hallé\nAllí me dio herencia de fidelidad\nY canto ¡Aleluya!, que grande libertad.\n\n3\nAnduve sobre montes, a escol yo bajé\nEn donde uvas, higos, granadas, encontré\nMiel y leche, maná la tierra de Canaán.\n\n4\nMi corazón reboza de gozo y paz\nY debo alabarte por cada día más\nEstoy marchando firme al celestial hogar\nY pronto Ya llevado iré a reposar.\n"
              },
              {
                "idalabanza": 204,
                "numhimnario": 180,
                "nombre": "Marcha De Triunfo",
                "alabanza": "1\n¡Salid valiente oh batallón de Israel! ¡Cantad triunfo y la victoria por la fe!\n¡Oh juventud, el tu simiente está en Jesús! ¡Eterna roca de lo, siglos firme es!\nYa prorrumpid con grandes voces, De amor El Evangelio de justicia y santo amor\nEste mensaje por doquiera ha de llegar, A los que gimen bajo el yugo de Satán.\n\nCoro\n¡Oh, las huestes de Jehová ya se preparan A luchar contra Satán;\nY valientes ya se miran los soldados, sus espadas empuñar!\nAunque sangre de los mártires nos cueste Derramada quedará\nEn los campos de batalla Ya sembrada siempre el Evangelio brotará.\n\n2\nCeleste ejército de ángeles de luz, será ayuda a los soldados de Jesús,\nCuando en la lucha la justicia de Jehová irá hacia el triunfo resguardando sin cesar\nY manifiesta luz del alba se verá y de vanguardia irá la gloria de Jehová\nCuando invocares a Jesús, presto será A responderte si le sirve en verdad.\n\n3\n¡Marchad valiente a luchar contra Satán! ¡Oh juventud, sin vacilar avanza ya!\nLa voz escucha que resuena por doquier, que luches siempre por Jesús es tu deber;\nDetén el sol si presto estas para triunfar el enemigo humillado quedará;\nComo Josué, por la gracia y por la fe, A su mandato el sol le pudo obedecer."
              },
              {
                "idalabanza": 205,
                "numhimnario": 181,
                "nombre": "Marcha Con Gozo (E)",
                "alabanza": "1\nMarcha con gozo, pueblo del Señor\nCon alabanzas y glorias al Creador;\nMirad a Cristo que humilde te invita,\nQue te regreses al banquete del amor.\n\nCoro\nEste es el pueblo que Dios ha escogido\nEra esparcido por el mundo y el error\nMas ahora con piedad lo ha recogido;\nVen a recrearte en el banquete del amor.\n\n2\nId por el mundo con este gran mensaje\nA toda tribu, lengua, pueblo y nación\nEs el mandato de Cristo el Salvador,\nQue se predique su santa salvación.\n\n3\nVen pues, hermano trabaja con empeño\nEn la labor de Cristo el Salvador,\nAllá en el cielo corona te espera,\nSi en su obra te empeñas con valor."
              },
              {
                "idalabanza": 206,
                "numhimnario": 182,
                "nombre": "Manos Redentoras",
                "alabanza": "Manos cariñosas, manos de Jesús,\nmanos que llevaron la pesado cruz.\nManos que supieron sólo hacer el bien,\n¡Gloria a esas manos! ¡Aleluya amén!\n\nBlancas azucenas, lirios de amor,\nfueron esas manos de mi Redentor.\nManos que a los ciegos dieron la visión\ncon el real consuelo de su gran perdón.\n\nManos que supieron calmar el dolor,\n¡Oh manos divinas de mi Redentor!\nQue multiplicaron los peces y el pan,\nmanos milagrosas que la vida dan.\n\nManos que sufrieron el clavo y la cruz;\nManos redentoras de mi buen Jesús.\nDe esas manos bellas yo confiado estoy,\nellas van guiando, pues al cielo voy.\n\n¡Oh Jesús tus manos yo las ví en visión\ny vertí mi llanto con el corazón;\nVí sus dos heridas y la sangre ví\nque tú derramaste por salvarme a mí."
              },
              {
                "idalabanza": 207,
                "numhimnario": 183,
                "nombre": "Meditad En Que Hay Un Hogar",
                "alabanza": "1\nMeditad en que hay un hogar,\nEn la margen del río de luz,\nDonde van para siempre a gozar\nLos creyentes en Cristo Jesús.\n\nCoro\nMás allá, más allá\nMeditad en que hay un hogar,\nMás allá, más allá, más allá,\nEn la margen del río de luz.\n\n2\nMeditad en que amigos tenéis,\nDe los cuales marchamos en pos\nY pensad en que al fin los veréis\nEn el alto palacio de Dios.\n\n3\nEn que mora Jesús meditad\nDonde seres que amamos están,\nY a la patria bendita volad,\nSin angustia, temores ni afán.\n\n4\nReunidos los míos seré\nMi carrera a su fin toca ya\nY en mi hogar celestial entraré,\nDo mi alma reposo tendrá."
              },
              {
                "idalabanza": 208,
                "numhimnario": 184,
                "nombre": "Mi Triunfo Con Jesús",
                "alabanza": "1\nDifícil es Señor Jesús\nVencer las luchas y la tentación,\nSin tu poder eterno Dios\nEl enemigo tiene la ocasión,\nNo dejes pues ¡oh buen Señor!\nQue ande en el mundo sin tu bendición:\nQue es para mí tu galardón\nY enorme escudo de la salvación.\n\nCoro\nQuiero vivir por siempre allá\nDonde tu amor no faltará\nDonde tu luz siempre será,\nPara los salvos la felicidad.\n\n2\nPor eso hoy ¡oh, buen Señor!\nQuiero decirte con el corazón\nQue débil soy y ansioso estoy\nDe ser hallado fiel en tu perdón."
              },
              {
                "idalabanza": 209,
                "numhimnario": 185,
                "nombre": "Mensajero",
                "alabanza": "1\nMensajero que vas a Cumplir tu misión,\nTú que anuncias la paz y las nuevas de Sión\nA los campos que vas anunciando su amor;\nQue mi Cristo te guarde y te sostenga fiel\nHasta volvemos a ver.\n\nCoro\nCuan hermosos son los pies sobre los montes\nDel que predica la paz, del que alegre nuevas trae,\nDel que anuncia salud, del que trae nuevas del bien,\nDel que dice a Sión tu Dios para siempre reinará\nPor los siglos Amén.\n\n2\nMensajero que vas a cumplir tu misión,\nAnunciando las nuevas de Cristo, el Salvador\nOraremos por ti, que te guarde el Señor,\nQue te dé de su gracia y te dé fortaleza\nY te revista de valor.\n\n3\nMensajero que anuncias una vida eterna,\nQue mi Cristo te manda que no debes callar\nLevantad voz en cuello, a los pueblos anunciad;\nQue deben aceptar la voz del Evangelio,\nQue les puede salvar.\n"
              },
              {
                "idalabanza": 210,
                "numhimnario": 186,
                "nombre": "Mi Madre Oraba Por Mi",
                "alabanza": "1\nMi madre oraba por mí, Cuando yo era un pecador,\nPues no quería escuchar, El consejo de su voz\nMás ella con fe y amor, Me hablaba del Salvador,\nElla siempre me decía, Hijo mío, busca a Dios,\n\nCoro\n¡Oh! que gozo siento en mi alma\nPorque Cristo me salvó; escuchó las peticiones\nDe mi madre en oración.\n\n2\nMi madre lloraba por mí porque no quería aceptar,\nY aunque decía que sí, pero no iba al altar; más\nElla lloraba por mí, que no fuera a desechar esa voz\nQue me decía: Ven a mi te h é descansar\n\n3\nMi madre elevaba su voz, hacia el cielo en oración,\nLe presentaba al Señor, una humilde petición;\nQue hubiera en mi corazón, una real regeneración;\nEso era lo que pedía demandándolo en oración.\n\n4\nUn día por gracia sentí, en mi ser una bendición.\nUn nuevo cambio sentí, dentro de mi corazón.\nHermoso placer para mí que hallé la salvación,\nDe Jesús la recibí. Por su gracia y compasión."
              },
              {
                "idalabanza": 211,
                "numhimnario": 187,
                "nombre": "Mi Dios Solo Mi Dios",
                "alabanza": "1\nAndaba yo en tinieblas perdido en la maldad\nBusqué muchas maneras de cambiar mi vivir,\nSiguiendo a dioses muertos Hechos de manos de hombres\nY nunca, nunca nadie pudo cambiar mi ser.\n\nCoro\nMi Dios, sólo mi Dios pudo cambiar mi ser\nCuando oí su palabra entró en mi corazón Ahora soy feliz.\n\n2\nAhora sólo adoro a Cristo mi tesoro\nQue un día con letras de oro mi nombre escribió,\nAllá en su libro Santo, mi nombre escrito está,\nY con un nombre nuevo, un día me llamará."
              },
              {
                "idalabanza": 212,
                "numhimnario": 188,
                "nombre": "Mi Expresión Favorita",
                "alabanza": "1\nHay una expresión muy linda\nQue sale del fondo del alma,\nLa canta el niño, y el joven\nY hasta el anciano la canta\nTodos aquí conocernos,\nLa expresión que me refiero,\nEs la palabra aleluya\nLa que cantan los que van al cielo.\n\nCoro\nQue me critiquen, que me persigan\nQue digan de mí lo que quieran\nDíganme loco, fanático, hereje\nPorque mi copa rebosa.\nSoportaré todo eso, que hasta mi cuerpo torturen\nPero no soportaré que me quiten decir: Aleluya.\n\n2\nAlguien se atreve a decir, que no tenemos cultura\nPorque alabamos a Dios y decimos Aleluya\nY aunque no tenga cultura yo quiero llegar al cielo\nPara decir Aleluya, Aleluya al cordero.\n\n3\nDicen que yo soy un loco, porque digo Aleluya\nY aunque esto sea locura, esa locura yo quiero,\nPero los espirituales tenemos un privilegio,\nEs que nuestro manicomio está en el Reino de los Cielos."
              },
              {
                "idalabanza": 213,
                "numhimnario": 189,
                "nombre": "Mi buen Jesús",
                "alabanza": "1\nMi buen Jesús mi Dios quiero servirte\nPues en tu viña yo quiero trabajar\n//Quiero gozarme con ser siervo tuyo,\nPor todo el mundo quiero ir a predicar.//\n\n2\nMi buen Jesús, mi Dios, quiero servirte,\nEn la virtud del Espíritu y poder\nQue obra milagros por tu Santo Evangelio\nY eterna vida de gozo da al que cree.\n\n3\nMi buen Jesús, mi Dios quiero servirte,\nPermíteme en tu viña trabajar,\n//Antes que mi alma se torne al paraíso,\nSeñor, yo quiero mi tiempo aprovechan//\n\n4\nAl terminar, Señor, mi vida aquí\nConcédeme llegar donde Tú estás,\n//Y presentarte mi obra limpia y pura,\nY coronado, Señor, contigo estad//"
              },
              {
                "idalabanza": 214,
                "numhimnario": 190,
                "nombre": "Mi Culpa Él Llevó",
                "alabanza": "1\nCansado y triste vine al Salvador\nMi culpa El llevó, mi culpa El llevó,\nNi eterna dicha hallé en su amor,\nMi culpa El llevó.\n\nCoro\nMi culpa El llevó, mi culpa El llevó,\nAlegre siempre cantaré.\nAl Señor gozoso alabaré,\nPorque El me salvó.\n\n2\nBorrados todos mis pecados son,\nMi culpa El llevó, mi culpa El llevó;\nA El feliz elevo mi canción.\nMi culpa El llevó.\n\n3\nYa vivo libre de condenación:\nMi culpa El llevó, mi culpa El llevó;\nSu dulce paz tengo en mi corazón,\nMi culpa El llevó.\n\n4\nSi vienes hoy a Cristo, pecador,\nTu culpa llevará, tu culpa llevará;\nPerdón tendrás si acudes al Señor.\nTu culpa llevará."
              },
              {
                "idalabanza": 215,
                "numhimnario": 191,
                "nombre": "Mientras Viva",
                "alabanza": "1\nMientras viva en este mundo\nEnemigos doquiera yo tendré;\nAl Señor estoy pidiendo\nEn la lucha auméntame la fe.\n\nCoro\nSeñor, auméntame la fe, si, auméntame la fe;\nY a cualquier enemigo venceré;\nSeñor auméntame la fe, sí, auméntame la fe,\n¡Oh mi Cristo, Tú lo puedes hacer!\n\n2\nEste mundo no me quiere,\nEso no podrá desalentar;\nEl Señor lo ha vencido,\nY El su gracia me da para triunfar.\n\n3\nSatanás nuestro enemigo,\nAl Señor Jesucristo se acercó.\nY si se acerca a mí, pues sigo\nEl camino que Cristo me marcó.\n\n4\nEnemigos poderosos\nNuestra ruina procura sin cesar.\nEl Señor dice: No temas\nYo contigo por siempre voy a estar."
              },
              {
                "idalabanza": 216,
                "numhimnario": 192,
                "nombre": "Mi Padre Es Un Rey",
                "alabanza": "1\nMi padre es un rey, muy rico, sin par,\nÉl tiene caudales inmensos doquier;\nSu oro y diamantes no pueden contar,\nTesoros que nadie podrá contener.\n\nCoro\nSoy el hijo de un Rey, el hijo de un Rey,\nCon Cristo bendito soy el hijo de un Rey.\n\n2\nEl hijo de Dios, mi buen Salvador,\nAl mundo uniendo muy pobre vivió:\nHoy reina en la gloria cubierto de honor,\nY hogar en los cielos con Dios me ofreció.\n\n3\nErrante viví, sin patria ni hogar,\nUn vil extranjero, sin Dios y sin fe;\nMás Cristo bendito me quiso adoptar;\nCorona y mansión en los cielos tendré.\n\n4\n¡Qué importa que yo no tenga ni hogar!\nYo tengo un palacio, del sol más allá,\nY mientras que llegue, yo puedo cantar:\nSoy hijo de un Rey ¡Aleluya a Jehová!"
              },
              {
                "idalabanza": 217,
                "numhimnario": 193,
                "nombre": "Mi Buen Jesús Con Gran Amor",
                "alabanza": "1\nMi buen Jesús con gran amor, mi alma te canta,\nDe gratitud de haber hallado en ti el perdón,\nCuando en el mundo en aflicción mi triste vida\nYa desahuciado, sin un consuelo en mi existir,\nMuy cariñoso, a mi oído así me habló:\nVen a mis brazos. Yo te daré la dulce paz\nComo un reflejo, llenó de luz sus ojos santos,\nLlenó de amor mi corazón y volvió a latir.\n\n2\nOh, cuán hermosa y dulce voz oí llamarme,\nQue fue embriagado en ese instante todo mi ser,\nFue Transformado mi llanto en canto y le adoré,\nCon toda mi alma yo le entregué mi corazón.\nUn cielo azul, lleno de luz, lleno de vida,\nY muchas almas glorificaban su nombre allí;\nYo me acerqué y alcancé su Manto Santo,\nY de mi azoté, en ese instante me rescató.\n\n3\nMi ser temblaba, sintiendo la dulce presencia\nDe mi Jesús, que con amor a mí tocó,\nY de rodillas caí a sus pies y perdón me dio\nMi Jesucristo me dio la mano y me levantó\nSu nombre alabo y le prometo seguirle fiel,\nQuiero contarle a todo el mundo quien es Jesús,\nEl principado, El poderoso, El Admirable,\nMi consejero, mi Dios Eterno, mi Rey de Paz."
              },
              {
                "idalabanza": 218,
                "numhimnario": 194,
                "nombre": "Mi Testimonio",
                "alabanza": "1\nMe siento muy contento con Cristo mi Señor,\nPorque él sanó mi cuerpo de dura enfermedad;\nYo tengo un testimonio tan grande que Contar,\nYo vivo de milagro, por Cristo mi Señor.\n\n2\nUn día tan enfermo me quise yo quitar,\nQuitarme yo la vida de ver mi condición;\nYo no sentía alivio de nada en mi ser,\nHasta que por su gracia Él tuvo compasión.\n\n3\nUn día en la mañana sintió mi corazón,\nAlgo que llegaría como una bendición;\nEnfrente de mi puerta estaba un varón,\nEran unos hermanos hablando salvación.\n\n4\nEntonces uno de ellos se puso en oración,\nPidiéndole tuviera de mí ser compasión;\nEl otro le decía, escucha mi oración,\nNo mires nuestras obras, perdónales Señor."
              },
              {
                "idalabanza": 219,
                "numhimnario": 195,
                "nombre": "Morir Por Cristo",
                "alabanza": "1\nMorir por Cristo me es ganancia,\nPues mientras viva o tenga aflicción,\nEl enemigo rodea mi alma\nPara llevarla a la condenación.\n\nCoro\nQuiero irme con Jesús, a morar en su mansión,\nDonde no habrá llanto, tampoco dolor,\nMi corona allí tendré, lejos de este mundo cruel;\nReinaré con mi Señor.\n\n2\nAquel gran siervo llamado Job,\nMurió confiado en resucitar;\nÉl fue el que dijo mi redentor;\nYo sé que Él vive y me levantará.\n\n3\nSe acerca el día que Cristo en gloria\nViene a llevar a la Iglesia de Dios,\nEn aquel día con gran victoria.\nVence el sepulcro, la muerte y su aguijón."
              },
              {
                "idalabanza": 220,
                "numhimnario": 196,
                "nombre": "Muchas Cuentas",
                "alabanza": "1\nMuchas cuentas tengo con mi Señor\nMuchas cuentas debo a mi Salvador;\nSi pagar pudiera su grande amor\nLe daría todo mi ser.\n\nCoro\n¿Qué le daré? ¿Qué le daré? no tengo que,\nPorque todas las cosas son suyas,\nMi vida también, mi vida también.\nSólo mi ser, mi corazón, puedo ofrecerte\nSi lo aceptas, oh, Cristo amoroso,\nOcúpalo pues, ocúpalo pues\n\n2\nSi David tu siervo que fue un gran Rey\nY que mil tesoros llego a tener,\nCon sus labios dijo: Todo es de Dios,\nY lo mismo suyo le ofrezco yo."
              },
              {
                "idalabanza": 221,
                "numhimnario": 197,
                "nombre": "Mi Barca",
                "alabanza": "1\nCalzando va mi barca inmenso mar de amores\nEl cielo está nublado anuncia tempestades\nOlas de sinsabores, las cruza sin temores,\nLa voluntad me hará llegar al puerto donde va.\n\n2\nAbre las puertas del canal, que mi barquilla\nQuiere pasar, hasta el puerto de Canaán\nMi barquilla quiere llegar.\n\n3\nLas olas se levantan, es fuerte la corriente,\nLos vientos la estremecen, parece naufragar,\nMás su ruta no cambia su capitán valiente\nNo respeta los vientos ni aún la tempestad."
              },
              {
                "idalabanza": 222,
                "numhimnario": 198,
                "nombre": "Nadie Pudo Amarme Como Cristo",
                "alabanza": "1\nYo quisiera hablarte del amor de Cristo\nPues en El hallé un amigo fuerte y fiel;\nPor su gracia transformó mi vida entera,\nLo que en esta vida soy, lo debo a Él.\n\nCoro\nNadie pudo amarme corno Cristo,\nEs incomparable su amistad;\nSólo Él pudo redimirme del Pecado,\nPor su amor y su bondad.\n\n2\nMi alma estaba llena de ayes y tristezas,\nLlena estaba de miserias y dolor;\nCon ternura Cristo me tendió la mano,\nY me guio por el sendero del amor.\n\n3\nCada día viene a darme nuevo aliento,\nA mi corazón infunde dulce Paz;\nNo comprenderé por qué vino a salvarme,\nHasta que en el cielo pueda ver su faz."
              },
              {
                "idalabanza": 223,
                "numhimnario": 199,
                "nombre": "Nítido Rayo Por Cristo",
                "alabanza": "1\nNítido rayo por Cristo\nYo quiero siempre ser,\nEn todo quiero agradarle,\nY hacerlo con placer.\n\nCoro\nUn nítido rayo,\nNítido rayo por Cristo\nUn nítido rayo,\nNítido rayo seré.\n\n2\nA Cristo quiero llegarme,\nEn mi temprana edad,\nPor siempre quiero amarle,\nY hacer su voluntad.\n\n3\nNítido rayo en tinieblas\nDeseo resplandecer;\nAlmas perdidas a Cristo\nAnhelo conducir.\n\n4\nUna mansión en el cielo\nFue Cristo a preparar,\nDo el niño tierno y amante\nGlorioso pueda entrar."
              },
              {
                "idalabanza": 224,
                "numhimnario": 200,
                "nombre": "No Me Importan Las Riquezas",
                "alabanza": "1\nNo me importan riquezas,\nDe precioso metal,\nSi más rico tesoro\nPuedo ir a gozar\nEn las páginas bellas\nDe tu libro eternal,\nDime, ¡Oh Cristo bendito\nSi mi nombre allí está!\n\nCORO\n¡Oh, el libro precioso\nDe tu reino eternal,\nSoy feliz para siempre,\nSi mi nombre allí está.\n\n2\nMuchos son mis pecados\nCual la arena del mar,\nMás tu sangre preciosa\nMe los puede limpiar;\nPorque tú has prometido\n¡Oh bendito Emmanuel!\nSi tus culpas son negras,\nBlancas yo las haré.\n\n3\n¡Oh ciudad deliciosa,\nCon mansiones de luz!\nDonde triunfante el cristiano\nGoza ya con Jesús;\nDonde no entra el pecado\nNi tristeza, ni mal;\nallí tengo mi herencia;\nSi, mi nombre allí está."
              },
              {
                "idalabanza": 225,
                "numhimnario": 201,
                "nombre": "No Tienes Excusas",
                "alabanza": "1\nAlma querida ¿en dónde vagas?\nEn las tinieblas te vas a perder.\nCoro\nNo tienes excusas, no tienes perdón\nNo tienes francas las puertas de Sión.\n\n2\nSi Jesucristo viniera este día\n¿Cuál es tu excusa que vas a decir?\n\n3\nPor no obedecer, por no querer creer\nPor tu capricho te vas a perder.\n\n4\nY  hoy te invitamos, ¡Oh vil pecador!\nQue en Jesucristo hallarás perdón.\n\n5\nEs un deleite el meditar.\nEn esa preciosa e inmensa ciudad.\n\n6\nEn esa preciosa y hermosa ciudad\nLos redimidos irán a morar."
              },
              {
                "idalabanza": 226,
                "numhimnario": 202,
                "nombre": "No Me Dejes",
                "alabanza": "1\nNo me dejes, no me olvides, tierno Salvador\nMuchos gozan tus mercedes, oye mi clamor.\n\nCORO\nCristo, Cristo, oye tú mi voz.\nSalvador, tu gracia dame, oye mi clamor.\n\n2\nAnte el trono de su gracia, hallo dulce paz\nNada aquí mi alma sacia: Tú eres mi solaz.\n\n3\nSólo fio en tus bondades, guíame en tu luz\nY mi alma no deseches, sálvame, Jesús.\n\n4\nFuente de vida de Consuelo, tú eres para mí\n¿A quién tengo en este suelo, sino sólo a ti?"
              },
              {
                "idalabanza": 227,
                "numhimnario": 203,
                "nombre": "No Hay Otro Salvador",
                "alabanza": "1\nNo hay otro Salvador aquí en el mundo para mí\nNo hay otro intercesor por mí después de mí Jesús\nPues Él murió en la cruz, lo sé, por redimirme a mí\nY a todo pecador que a su palabra sea fiel.\n\nCoro\nEn la cruz Él murió y su sangre vertió.\nCruel tormento sufrió en su agonía fatal.\nDe su costado vertió una fuente de amor\nPor salvar al más vil pecador.\n\n2\nEl es un Padre tierno y fiel, no hay otro como Él\nSu amor puso en la Cruz por mí, indigno pecador\nEl alma tiernamente y fiel, consuela con amor\nY todo el que le busca gozará de su favor.\n\n3\nA veces abatido ya me siento desmayar\nImploro su socorro fiel y me hace vencedor;\nPor eso con el alma yo le canto sin cesar\nConfiando en su poder, feliz podré permanecer."
              },
              {
                "idalabanza": 228,
                "numhimnario": 204,
                "nombre": "No Vagues Incierto",
                "alabanza": "1\nNo vaques incierto, pobre peregrino\nBuscando consuelo en el mundo fatal\nRegresa y pregunta cuál es el camino\nQue puede llevar al país celestial.\n\n2\nBuscando en el mundo jamás hallarás\nConsuelo, ni dicha ni gozo eternal\nSiguiendo a Cristo al fin llegarás\nAllá al glorioso Edén celestial.\n\n3\nSi triste caminas, pobre peregrino\nPerdido en el mundo y sin dirección\nCristo es la luz, Él es el camino\nQue puede llevarte a su bella mansión.\n\n4\nEntrégale a Cristo hoy tu corazón\nUna nueva vida en ti brillará\nDios te colmará de gran bendición\nEl Espíritu Santo en ti morará."
              },
              {
                "idalabanza": 229,
                "numhimnario": 205,
                "nombre": "No Temeré",
                "alabanza": "1\nNo temeré llevar la cruz, si mi Jesús conmigo va:\nLa llevaré  hasta el fin, si mi Jesús conmigo va.\n\n2\nEn mi Jesús yo confiaré y en sus caminos yo andaré\nY gloria eterna con él tendré, si mi Jesús conmigo va.\n\n3\nYo serviré a mi Jesús, proclamaré su gran verdad:\nCorona eterna con él tendré, si fiel camino hasta el fin.\n\n4\nPor donde quiera yo iré, anunciaré su gran verdad\nPues Cristo es la luz y verdad, para el mundo pecador."
              },
              {
                "idalabanza": 230,
                "numhimnario": 206,
                "nombre": "¡Oh, Sí Quiero Verle!",
                "alabanza": "1\nVoy feliz al dulce hogar, por fe en Jesús\nY luchando a traer, almas a la luz;\nDardos encendidos mil, vienen contra mí\nMás yo sé por la fe, venceré aquí.\n\nCoro\n¡Oh, sí quiero verle, ver al Salvador!\nQuiero ver su rostro lleno de amor;\nEn aquel gran día yo he de cantar.\n¡Ya pasó todo afán, todo mi pesar!\n\n2\nEn servir al Salvador por los valles voy\nDonde muchas sombras hay, más seguro estoy\nMuchos triunfos obtendré, nunca faltará\nMi Jesús es la luz, El me sostendrá."
              },
              {
                "idalabanza": 231,
                "numhimnario": 207,
                "nombre": "¡Oh Hermanos! Despertemos",
                "alabanza": "1\n¡Oh hermanos! Despertemos, ya estamos en el fin;\nYa muy pronto escucharemos, el sonar el gran clarín.\n\nCoro\nEl Señor de señores, al mundo regresará.\n//Según del hombre sus labores, la recompensa le dará//\n\n2\nEl traslado de los creyentes, ya muy pronto habrá de ser\nQue señales evidentes, ya se miran por doquier.\n\n3\nPronto a Cristo ya veremos, el viene y no tardará\nHermanos, perseveremos, el tiempo es corto ya.\n\n4\nEl que viva aquí confiado, que el Señor se tardará\nTristemente atormentado, a sufrir se quedará."
              },
              {
                "idalabanza": 232,
                "numhimnario": 208,
                "nombre": "Oh Hermano, Ya Muy Pronto",
                "alabanza": "1\nOh hermano, ya muy pronto llegaremos\nAl gran día de ese gozo sin igual\n//Cuando a Cristo cara a cara allá vernos\nY entonaremos nuestro cantico triunfal.//\n\n2\nO hermanos, esa gloria ambicionemos\nMirar a Cristo, sea nuestro ideal\nCon los ángeles en gloria cantaremos\nAllá en aquella hermosa patria celestial.//\n\n3\n¡Qué felices cuando esta tierra dejemos\nY ya estemos con Dios en la eternidad!\n//Coronados por su mano allá sernos\nY nuestras lagrimas El nos enjugará.//\n\n4\nYa muy pronto llega el fin de la jornada\nYa nuestras luchas todas van a terminar\n//Pues ya la gloria tiene Cristo preparada\nAllá estaremos en el célico gozar.//"
              },
              {
                "idalabanza": 233,
                "numhimnario": 209,
                "nombre": "¡Oh! Pan Del Cielo",
                "alabanza": "1\n¡Oh!, pan del cielo, dulce bien\nMás excelente que el maná.\n//Si el alma busca su sostén\nEternamente vivirá.//\n\n2\n¡Oh! Pacto del Señor\nEn santa copa de Salud\n//Reconciliado el pecador\nSe acerca a Dios por su virtud.//\n\n3\nHambrienta el alma, vengo a ti\nMi buen Jesús con viva fe;\n//Tu mesa es franca para mí\nY en humildad me acercaré.//\n\n4\nSé tú mi pan consustancial\nQue al alma nutra y dé vigor.\n//Y en vida y júbilo inmortal\nDiré las glorias de tu amor.//"
              },
              {
                "idalabanza": 234,
                "numhimnario": 210,
                "nombre": "¡Oh Que Dicha!",
                "alabanza": "1\nSólo espero ese día, que Cristo vendrá\nPara ir a gozar de su tierno amor\nCuando todas mis lágrimas enjugará\n¡Oh que dicha que viniera hoy!\n\nCoro\n¡Oh que dicha que viniera hoy!\n¡Oh que dicha que viniera hoy!\nCuando todas mis lágrimas enjugará\n¡Oh que dicha que viniera hoy!\n\n2\nSólo espero ese día glorioso, sin par\nCuando Cristo descienda con gran majestad\nCuando todas mis lágrimas enjugará.\nPorque Cristo así lo prometió.\n\n3\nYa parece que veo a mi amado Señor\n¡Oh que dicha que viniera hoy!\nPues en vez de una cruz o afanes aquí\nAllá nuestra fe coronará.\n\n4\nSólo espero oír el sonar del clarín.\nPues los muertos resucitaran;\nLos salvados en Cristo con El se irán.\nA gozar con Jesús el Señor."
              },
              {
                "idalabanza": 235,
                "numhimnario": 211,
                "nombre": "¡Oh Pródigo Vuelve!",
                "alabanza": "1\n¡Oh pródigo vuelve! No sigas vagando\nSo sólo hallarás tristeza y dolor;\nMedita en que otros se encuentran gozando\nDe las bendiciones del padre de amor.\n\n2\nTu grande herencia estás defraudando\nEn esos placeres del mundo traidor;\nRegresa, que el Padre te está esperando\nTe está ofreciendo un vestido mejor.\n\n3\nEl Padre jamás te deja en el olvido\nSin Él no hallarás otra vida mejor;\nVen y dile tus culpas, cuales hayan sido.\nQue Él quiere estrecharte en sus brazos de amor\n\n4\nEl Padre te ofrece un lugar más hermoso\nEn aquellas mansiones gloriosas sin par\nCumplido será en el Padre el gozo\nPor el hijo perdido, que al fin pudo hallar."
              },
              {
                "idalabanza": 236,
                "numhimnario": 212,
                "nombre": "Oh Yo Quiero Andar Con Cristo",
                "alabanza": "1\nOh yo quiero andar con Cristo\nQuiero oír su tierna voz\nMeditar en su palabra\nSiempre andar en El en pos\nConsagrar a Él mi vida\nCumplir fiel su voluntad\nY algún día con mi Cristo\nGozaré con claridad.\n\nCoro\n¡Oh sí, yo quiero andar con Cristo!\n¡Oh sí, yo quiero andar con Cristo!\n¡Oh sí, yo quiero andar con Cristo!\nQuiero serle un testigo fiel.\n\n2\n¡Oh yo quiero andar con Cristo\nEl vivió en Santidad\nEn la biblia yo lo leo y\nYo sé que es la verdad!\nCristo era santo en todo\nEl Cordero de la cruz\nY yo anhelo ser cristiano\nSeguidor de mi Jesús.\n\n3\n¡Oh yo quiero andar con Cristo\nDe mi senda es mi luz;\nDejaré el perverso mundo\nY cargar así mi cruz!\nEste mundo nada ofrece\nCristo ofrece salvación;\nEs mi única esperanza\nGozar vida eterna en Sión."
              },
              {
                "idalabanza": 237,
                "numhimnario": 213,
                "nombre": "¡Oh! Dios Mío",
                "alabanza": "1\n¡Oh! Dios mío, con que podré pagarte\nLas maravillas que tú hiciste por mí\nMe levantaste de donde estaba muerto\nPara darme vida y también la salvación.\n\nCoro\nPor mucho tiempo anduve yo perdido\nDesamparado de la mano de Dios\nAhora canto feliz que soy de Cristo\nY estoy seguro que soy salvo por amor\n\n2\nAhora quiero a Cristo obedecerle\nY entregar todo mi corazón\nY anunciar a todos mis amigos\nQue el bautiza, sana y da la salvación.\n"
              },
              {
                "idalabanza": 238,
                "numhimnario": 214,
                "nombre": "Oye Jehová",
                "alabanza": "1\nOye Jehová, de mi alma este cantar\nQuiero, Señor tu nombre alabar\nY proclamar tu reino celestial\nY así cantar alegre un cantico triunfal.\n\nCoro\nAhora vivo alegre cantándole al Señor\nMi vida peregrina muy pronto pasará\nY alegre con los ángeles mi alma cantará.\n\n2\nOye Jesús mi alma te alabará\nQuiero ensalzar tu nombre sin igual\nTú gran poder yo anhelo anunciar\nY así cantar alegre un cantico triunfal.\n\n3\nOye Señor, a ti daré loor\nCanción de amor a ti quiero elevar\nY contemplar tu trono celestial\nY así cantar alegre un coro angelical."
              },
              {
                "idalabanza": 239,
                "numhimnario": 215,
                "nombre": "¡Oh Jóvenes Venid!",
                "alabanza": "1\n¡Oh jóvenes venid! Su brillante pabellón\nCristo ha desplegado ante la nación\nA todos en sus filas os quiere recibir\nY con Él a la pelea os hará salir.\n\nCoro\n¡Vamos a Jesús, alistaos sin temor\nVamos a la lid, inflamados de valor!\nJóvenes luchemos todos contra el mal;\nEn Jesús llevamos nuestro General.\n\n2\n¡Oh jóvenes venid! El caudillo Salvador\nQuiere recibiros en su derredor;\nCon Él a la batalla salid sin vacilar;\nVamos pronto, compañeros, vamos a luchar.\n\n3\nLas armas invencibles del jefe guiador\nSon el evangelio y su gran amor;\nCon ellas revestidos y llenos de poder\nCompañeros, acudamos vamos a vencer.\n\n4\nLos fieros enemigos, engendros de Satán\nSe hallan sostenidos por su capitán;\nOh jóvenes, vosotros poneos sin temor\nA la diestra del caudillo, nuestro Salvador.\n\n5\nQuien venga a la pelea su voz escuchará;\nCristo la victoria le concederá;\nSalgamos, compañeros, luchemos bien por El\nCon Jesús conquistaremos inmortal laurel."
              },
              {
                "idalabanza": 240,
                "numhimnario": 216,
                "nombre": "Ojalá",
                "alabanza": "1\nOjalá que hoy fuera su venida\nOjalá que hoy viniera el Salvador\n// y las puertas de los cielos se abrieran\nY yo viera con mis ojos al Señor.//\n\nCoro\nPara que seguir viviendo en este mundo de maldad\nSi Cristo viene ya ¿Qué vamos hacer?\nBendito Dios no tardes más a Jesucristo\nEnvíanos ya, que venga a levantar a su pueblo.\n\n2\nOjalá que la luna se ocultara\nY apareciera Cristo en su lugar\n//Atraer un galardón a los salvos\nY llevarnos a la patria celestial.//"
              },
              {
                "idalabanza": 241,
                "numhimnario": 217,
                "nombre": "Oye Pecador Cristo Te Está Llamando",
                "alabanza": "1\nOye pecador Cristo te está llamando\nOye la grata invitación;\nYa no es tiempo de que sigas vagando\nEn el camino de la perdición.\n\n2\nPues no desprecies la invitación\nYe dice ahora ven sin tardar\nSi estás cansado y trabajado\nVen hoy a Cristo y descansarás.\n\n3\nYa no esperes grandes placeres\nPorque el tiempo se terminó\nLas profecías se están cumpliendo.\nYa el gran día se acercó.\n\n4\nAllí serán tus tristes lamentos\nSi no aceptas hoy a tu creador\nEstás oyendo el llamamiento\nDe mi Jesús por mí murió.\n"
              },
              {
                "idalabanza": 242,
                "numhimnario": 218,
                "nombre": "Oye Pecador",
                "alabanza": "1\nOye pecador de Dios el llamamiento\nPues Cristo tu alma Él quiere salvar.\n//No pienses llegar sin arrepentimiento\nA esas mansiones que Él fue a preparar.//\n\n2\nSi por los placeres aquí en este mundo\nTú dejas a Cristo en vano llamar\n//tendrás que tornarte en llanto profundo\nPor todas las glorias que aquí has de gozar.//\n\n3\nTan vez porque gozas de aquí de riquezas\nNo piensas que Cristo otra vez volverá\n//Un día tendrás que llorar de tristeza\nReflexionarás, pero tarde será.//\n\n4\nNo pienses que Cristo dará salvación\nA aquel que no quiere dejar el placer.\n//Pues claro lo dice que condenación\nLe espera al que nunca le quiso creer.//\n\n5\nPero si no quieres ir al sufrimiento\nOye, pues, atento de Dios su llamar\n//Vente conmovido de arrepentimiento\nEs tiempo que puedas a Cristo aceptar.//"
              },
              {
                "idalabanza": 243,
                "numhimnario": 219,
                "nombre": "Oh Hermanos, Meditemos",
                "alabanza": "1\nOh hermanos, meditemos en el que ha de venir\n//A llevar a su iglesia y presentarla allá.//\n\nCoro\nNo estemos meditando en las glorias de aquí\n//Las glorias de aquí tienen que perecer.//\n\n2\nYo siempre medito en mi amado Señor\n//En aquel que me ha dado una gran salvación.//\n\n3\nJesús me ha salvado por su gran amor\n//Y quiere salvarte a ti, pecador.//\n\n4\nA cada momento debemos orar\n//Para estar listos cuando venga al señor.//"
              },
              {
                "idalabanza": 244,
                "numhimnario": 220,
                "nombre": "Oigo Decir",
                "alabanza": "1\nOigo decir que más allá hay un lugar\nDonde el creyente siempre pueda morar\nDonde ni muerte ni pesar habrá jamás\nPues allá con el Señor es todo solaz.\n\nCoro\n¡Allá quiero estar! ¡Allá quiero estar!\nVer a mi Salvador y con el morar\n¡Allá quiero estar! ¡Allá quiero estar!\nY alabanzas a Jesús allí entonar.\n\n2\nNo dejaré de proclamar a mi Jesús\nPor pecadores ya murió en cruenta cruz\nCalma dará al peregrino en tempestad\nCanto por duelo le dará en su gran bondad.\n\n3\nSi tengo pruebas cantaré feliz aquí\nPorqué yo sé que voy a ver a Cristo allí\nDonde por siempre con fervor yo cantaré\nCanto de gozo allí entonaré.//"
              },
              {
                "idalabanza": 245,
                "numhimnario": 221,
                "nombre": "Oh Que Dura Es Tu Palabra",
                "alabanza": "1\nOh que dura es tu palabra\nQuién la podrá llevar Señor.\nSiento que a mí me hiere el alma\nY que penetra hasta mi corazón.\n\nCoro\nQuién la podrá llevar Señor\nQuién la podrá cumplir Señor\nSi es dura para mí tu palabra fiel;\nSi tú medas poder Señor\nSi tú me das la fe también\nSé que podré vencer\nPor solo tú eres mi ayudador.\n\n2\nLo que para mí es imposible\nPara mi Dios no lo será;\nNo queda más que decirme\nPara que cumpla yo con su voluntad.\n\n3\nOh que dura es tu palabra\nQue al escucharla siento yo;\nTal vez no podré llevarla\nPero mi Cristo siempre me ayudará."
              },
              {
                "idalabanza": 246,
                "numhimnario": 222,
                "nombre": "Para Que Pecar",
                "alabanza": "1\nPara que pecar si soy salvo si ya tengo santa luz\nPara que pecar si la vida Dios me ha dado en Jesús\nPara que pecar si el infierno sólo espera al pecador\n///Para que pecar/// Contra Dios.\n\n2\nEs mejor vivir santamente\nVictoriosa contra el mal, pues Jesús\nPreparará a sus santos una patria celestial\nUna patria hermosa donde el mundo no entrará\n///Para que pecar/// Contra Dios.\n\n3\nCon Jesús el Rey llegaremos\nA la patria celestial en eterna paz\nViviremos disfrutando su bondad\nDonde ya no habrá más tristeza\nNi afanes, ni dolor\n///Para que pecar/// Contra Dios.\n\n4\nPara que pecar si el pecado nos aparta del amor\nPara que pecar, si he nacido ya de nuevo en el Señor\nPara que pecar, Si en el mundo sólo está la perdición\n///Para que pecar/// Contra Dios."
              },
              {
                "idalabanza": 247,
                "numhimnario": 223,
                "nombre": "Pecador Ven a Cristo Jesús",
                "alabanza": "1\nPecador ven a Cristo Jesús\nY feliz para siempre serás\nQue si tú le quisieras tener\nAl divino Señor hallarás\n\nCoro\nVen a Él, Ven a Él\nQue te espera tu buen Salvador\nVen a Él, Ven a Él\nQue te espera tu buen Salvador\n\n2\nSi cual hijo que necio pecó\nVas buscando a sus pies compasión\nTierno Padre en Jesús hallarás\nY tendrás en sus brazos perdón.\n\n3\nSi enfermo te sientes morir\nEl será tu doctor celestial\nY hallarás en su sangre también\nMedicina que cure tu mal.\n\n4\nOvejuela que huyó del redil\nHe aquí tu benigno Señor\nY en los hombros llevada serás\nDe tan dulce y amante Pastor."
              },
              {
                "idalabanza": 248,
                "numhimnario": 224,
                "nombre": "Pecador, Oye Atento",
                "alabanza": "1\nPecador, oye atento el llamamiento\nQue el Dios de amor te hace sin cesar\n//Ven a Él con un arrepentimiento\nSi vida eterna con Él quieres gozar.//\n\n2\nCada día se acerca la muerte\nDe muerte eterna Dios te quiere librar\nDel mañana no sabes tú triste suerte\nY ya entonces no lo puedes remediar.\n\n3\nTal vez mañana ya será quitada\nDe tus pupilas la luz que Dios te dijo;\nPero que tu alma vaya consolada\nA las mansiones que Dios te preparó.\n\n4\nMirad el tiempo que pasa presuroso\nDios te dice: “Venid hoy sin tardar”\nÉl te ofrece un eternal reposo\nSi ahora mismo le quiere aceptar. "
              },
              {
                "idalabanza": 249,
                "numhimnario": 225,
                "nombre": "Perdón Te Ruego",
                "alabanza": "1\nSi fui motivo de dolor Oh Cristo\nSi por mi causa el débil tropezó;\nSi en tus pisadas caminar yo quise\nPerdón te ruego, mi Señor y Dios.\n\nCoro\nEscucha, Oh Dios, mi confesión\nY líbrame de tentación sutil;\nReserva siempre mi alma en tu rebaño\nPerdón, te ruego, mi Señor y Dios.\n\n2\nSi vana y sutil mi palabra ha sido\nSi al que sufría en su dolor dejé\nNo me condenes tú por mi pecado\nPerdón te ruego, mi Señor y Dios."
              },
              {
                "idalabanza": 250,
                "numhimnario": 226,
                "nombre": "Por Una Senda Estrecha (E)",
                "alabanza": "1\nPor una senda estrecha andaba yo\nY allí a un extraño vi.\nLa carga que llevaba me mostró;\nEra una cruz que conocí.\n\nCoro\n“Ven, trae tu cruz y sígueme”\nOí su tierna voz llamar\nNegarle nunca puedo a quien por mi\nSu vida quiso dar.\n\n2\nClamé al señor Jesús y Él me habló\nSus manos lastimadas vi\nLas huellas del desprecio que El sufrió\nSufrió por redimirme a mí.\n\n3\nTu cruz permíteme cargarla, hablé\nY otra cruz me señaló;\nLa misma que con miedo deseché\nCuando antes Él me la ofreció.\n\n4\nLa senda sigo que su fin tendrá\nEn gloria eterna, paz y amor\nDo por la cruz corona me dará\nMi guía fiel, mi Salvador."
              },
              {
                "idalabanza": 251,
                "numhimnario": 227,
                "nombre": "Porque Él Vive",
                "alabanza": "1\nDios nos envió a Jesucristo\nVino a morir para salvar\nVino a morir, pagó mi deuda\nAunque murió, su tumba ya vacía está.\n\nCoro\nÉl vive hoy, vivirá mañana.\nConfío en Él; no temeré\nPronto veré a mi Maestro\nY ahora espero venga ya la eternidad.\n\n2\nY algún día con los santos\nAlabaremos a Jesús,\nal mar de vidrio llegaremos,\nveré sus manos y sus pies heridos por mí.\n\n3\nPorque Él vive triunfaré mañana\nPorque Él vive ya no hay temor\nPorque yo sé, que el futuro es suyo\nLa vida vale más y más sólo con Él."
              },
              {
                "idalabanza": 252,
                "numhimnario": 228,
                "nombre": "Pronto Vamos al Hogar",
                "alabanza": "1\nEntonemos una canción para animar\nYa pronto vamos al hogar.\nYa la noche terminará en eterno día\nYa muy pronto vamos al hogar.\n\nCoro\nYa muy pronto, si, ya muy pronto, si\nCruzaremos el Jordán.\nReunidos todos seremos con Jesús\nYa pronto vamos al hogar.\n\n2\nTrabajemos siempre con todo el afán\nYa muy pronto vamos al hogar.\nNuestras luchas diarias las suplirá el Señor\nYa muy pronto vamos al hogar.\n\n3\nHay descanso allí y alivio del dolor;\nYa muy pronto vamos al hogar.\nNo habrá lágrimas en aquella gran ciudad\nYa muy pronto vamos al hogar."
              },
              {
                "idalabanza": 253,
                "numhimnario": 229,
                "nombre": "Por Cual Camino Vas",
                "alabanza": "1\nLa puerta es Cristo para entrar\nAl reino celestial.\nSi tú quieres participar\nApártate del mal.\n\nCoro\nPor cual camino vas, si tu resuelto estás\nYa sabes que a Jesús, tu cuenta le vas a dar\nPor cual camino vas.\n\n2\nSon dos caminos los que van hacia la eternidad\nEl más angosto es el de Dios y el ancho es de Satán.\n\n3\nPor el angosto hay aflicción, pruebas y tentación.\nEl que venciere reinará con Cristo en la mansión.\n\n4\nPor el más ancho sólo van todos los que hacen mal\nTambién su pago lo tendrás en el lago infernal.\n\n5\nVen al Señor, no seas infiel, dale hoy tu corazón\nPara que puedas recibir; de Cristo el galardón."
              },
              {
                "idalabanza": 254,
                "numhimnario": 230,
                "nombre": "Pon Tu Mano, Señor",
                "alabanza": "1\nCuando en pruebas se encuentra mi alma\nY tu luz casi no puedo ver\nSurge un grito de mi alma que clama.\nPon tu mano Señor sobre mí.\n\nCoro            \nPon tu mano, Señor, sobre mí.\nPon en mi alma ese mismo sentir\nDame gracia para obedecer\nDame fuerzas para yo vencer.\n\n2\nLucha mi alma y mi carne\nPor sentir tú llamado en mí.\nNo es posible seguir ocultando \nNo es posible tu voz resistir."
              },
              {
                "idalabanza": 255,
                "numhimnario": 231,
                "nombre": "Por Gracia Me Alcanzó",
                "alabanza": "1\nEn la orilla de la muerte me encontraba\nSin Dios, sin perdón, sin esperanza\nEsperando vivir en este mundo\nSin tener perdón para mi alma.\n\nCoro\nMás por eso vino Cristo el Salvador\nA buscar y salvar a los perdidos\nY en esto se encontraba ya mi vida\nMás por gracia me alcanzó Cristo Jesús.\n\n2\nCaminé por el mundo sin consuelo\nSin querer aceptar que había un Dios\nY hundido en mi orgullo cada día\nSin querer reconocer yo mi maldad.\n\n3\nYa mi alma alegre con Cristo\nDando gracias a Él, qué grande es Dios\nMe libró de mis enfermedades\nY esperanza a mi alma el me dio…\n\n4\nTú escuchas pecador que no has querido\nAceptar a Cristo de poder\nPiensas bien a donde irá tu alma\nY a donde pasará la eternidad."
              },
              {
                "idalabanza": 256,
                "numhimnario": 232,
                "nombre": "Puedo Entonces Conocerte",
                "alabanza": "1\nCuando aquí de mi vida mis afanes cesen ya\nY se anuncie bella aurora celestial\nEn las playas del cielo mi llegada, esperará\nMi Señor con bienvenida Paternal.\n\nCoro\nPuedo entonces conocerle\nY seguro en su seno estaré\nCara a cara espero verle\nY con el redimido viviré.\n\n2\n¡Oh! Que gozo tendré yo cuando pueda ver su faz\nY en eterna vida esté con mi Señor\nDe su lado ya nunca podrá quitar jamás\nLos halagos de mi fiero tentador.\n\n3\nHe de ver a los seres que en la tierra yo perdí\nCuando en brazos de la muerte los dejé;\nY aunque de ellos entonces con solo me despedí\nJunto al trono de Jesús los hallaré.\n\n4\nAl entrar por las puertas de la célica ciudad\nMe uniré con los que ya triunfantes van;\nY del himno que alabe de mi Dios la majestad\nLos acentos por los siglos sonarán."
              },
              {
                "idalabanza": 257,
                "numhimnario": 233,
                "nombre": "Pronto Viene Jesús",
                "alabanza": "1\nPronto viene Jesús, si, ya viene\nYa no tarda Jesús en venir.\nQue tu mano, Señor, me sostenga\nSeñor, cuando vengas, Señor, cuando vengas\nTú me llevarás.\n\nCoro\nLlena mi copa, Jesús, de tu aceite\nTu Espíritu guíe mi vida de paz.\nDame gozo, poder, santidad\nSeñor, cuando vengas tú me llevarás.\n\n2\nNo me duermo, Señor, no me duermo\nNo me duermo, yo quiero esperar.\nHas que llene mi vaso de aceite\nNo sea que me falte, no sea que al comprarlo\nMe pueda quedar.\n"
              },
              {
                "idalabanza": 258,
                "numhimnario": 234,
                "nombre": "Qué Bueno Es El Maestro",
                "alabanza": "1\nQué bueno es el Maestro, ¿Con qué le podré pagar?\nCuando me vio navegando, en el mundo de maldad\nExtendió su santa mano. Él quiso rescatar.\n\nCoro\nMaestro, Oh Maestro, Maestro de Galilea.\nTú me viste naufragando\nComo el barco en la marea.\nMaestro, Oh Maestro, Maestro de Nazareth.\nNo te olvides de los tuyos\nNo los dejes perecer.\n\n2\nMi vida ya era perdida, el enemigo me hirió.\nPero el buen samaritano, transitando me encontró;\nMe extendió su santa mano, mis heridas Él vendó.\n\n3\nSólo te pido, Maestro, Que me aumentes más la fe.\nPara seguir avanzado y Animando al que no cree\nPorque el tiempo está muy cerca y hay que predicar la fe."
              },
              {
                "idalabanza": 259,
                "numhimnario": 235,
                "nombre": "Que Bella Historia",
                "alabanza": "1\nQue bella historia, de su excelsa gloria\nBajo mi Salvador, Jesús mi Rey Señor\nNació en pesebre despreciado y Pobre\nVarón de lágrimas y de dolor.\n\nCoro\nOh cuánto le amo y fiel le adoró\nMi sol, mi vida mi Salvador.\nEl rey  de gloria vino a salvarme\nY al revelarme al Dios de amor.\n\n2\nCuan admirable es el don divino\nDe plena salvación, eterna redención.\nEl sol de mi alma, brilla en mi camino\nY por su gran amor, El me salvó.\n\n3\nQué gran ministerio, tan incomparable\nEl verbo se encarnó al mundo descendió\nEl plan oculto, revelase al hombre.\nY cuán feliz y libre sé que soy."
              },
              {
                "idalabanza": 260,
                "numhimnario": 236,
                "nombre": "Qué Lindo es mi Cristo",
                "alabanza": "1\nQué lindo es mi Cristo. Cuán grande es su amor\nYo andaba perdido, El vino y me halló\nCon sus tiernas manos El me acarició\nTomóme en sus manos y allí me arrulló.\n\nCoro\nCuán dulces caricias, las del Salvador\nCaricias que llenan mi alma de amor\nSi voz me asegura conmigo el estar\nEstar para siempre por la eternidad.\n\n2\nQue dulce es mi Cristo, cuán grande es su amor\nQue diste tu vida por mi pecador\nDejaste tu gloria por venir aquí\nBuscando perdidos me encontraste a mí."
              },
              {
                "idalabanza": 261,
                "numhimnario": 237,
                "nombre": "Quiero Ser Fiel Hasta La Muerte",
                "alabanza": "1\nQuiero seguir al Salvador en este mundo\nY predicar una gran verdad es mi deseo;\nY serle fiel en todo hasta la muerte\nY así gozar el galardón que Él me dará.\n\n2\nYo quiero ser ejemplo fiel de otras almas\nY demostrar que Cristo es mí guía fiel\nY extender su palabra por doquiera\nY así cumplir las duras luchas de mi ser.\nQuiero vivir en tu amor y para siempre\nY contemplar que eres tú mi luz divina\nMi esperanza y mi fe la tengo en ti\nY así vencer las duras luchas de mi ser.\n\n3\nAnhelo ser el portavoz de mi Jesús\nY proclamar que Él es vida y es verdad;\nSoy un testigo de Jesús que Él me salvó\nPor eso canto y le alabo en verdad."
              },
              {
                "idalabanza": 262,
                "numhimnario": 238,
                "nombre": "¿Quién Irá?",
                "alabanza": "1\nYa es tiempo mis hermanos despertemos\nDel fatal y largo sueños despertemos;\nY llevar a todas las criaturas\nEl mensaje de luz de salvación.\n\nCoro\n¿Quién irá? ¿Quién irá?\nQue la luz les llevará\n¿Quién irá? ¿Quién irá?\nQuien testigos les será\nEn mi viña son pocos los obreros\n¿Quién irá? ¿Quién irá a mi viña hoy?\nYo iré, yo iré, yo la luz les llevaré;\nYo iré, yo iré, yo testigo les seré\nEn tu viña son poco los obreros\nYo iré, yo iré a su viña hoy.\n\n2\nA toda raza, lengua y pueblo prediquemos\nEl mensaje del Señor anunciemos;\nAl predicar el evangelio por doquiera\nEl fin vendrá y Jesucristo volverá."
              },
              {
                "idalabanza": 263,
                "numhimnario": 239,
                "nombre": "Recuerdo",
                "alabanza": "1\nRecuerdo con gozo el momento\nCuando me salvaste Señor\nRecuerdo con íntimo acento\nYo quiero que prediques mi amor.\n\nCoro\nDesde hoy te consagro mi vida\n¿La quieres usar mi Señor?\nEs divino el amor predicando\nPara mí no hay vida mejor.\n\n2\nMi vida sin ti fue miseria\nAngustia, pecado y, dolor\nMi alma estaba tan triste;\nSin fe, esperanza y sin Dios.\n\n3\nCampanas de gozo hay en mi alma\nCaminando con mi Salvador\nTu luz me ilumina mi senda\nY aviva en mi alma la fe."
              },
              {
                "idalabanza": 264,
                "numhimnario": 240,
                "nombre": "Responsable",
                "alabanza": "1\nEl que oye su palabra, Responsable él será\nEl que ha oído su evangelio de Justicia y de verdad.\nPor el mundo se predica que Jesús pronto vendrá\nEl que desprecie su llamado responsable él será.\n\nCoro\nTú serás responsable de tu alma\nSi hasta hoy le das tu corazón;\nSólo aquel que se entrega a Jesucristo\nGozará de eterna Salvación.\n\n2\nResponsable tú que oyes, Tú que cantas con fervor.\nQue no quiere que te digan, del Bautismo en el Señor;\nResponsable tú qué dices, que mañana aceptarás\nYa que has oído que mañana, quizá tiempo no hallarás.\n\n3\nCada hora que pasa, es preciosa ante el Señor.\nEs un momento más de mi vida, que te presta a ti tu Dios.\nQue decía cual camino, quieres tú aquí llevar;\nEsta palabra que has oído, responsable a ti te hará."
              },
              {
                "idalabanza": 265,
                "numhimnario": 241,
                "nombre": "Rostro Divino",
                "alabanza": "1\nRostro divino, ensangrentado\nCuerpo llagado por nuestro bien;\nCalma benigno, justo enojos\nLloren los ojos que así te ven.\n\nCoro\nCrucificado en un madero\nManso cordero mueres por mí;\nPor eso el alma triste y llorosa\nSuspira ansiosa, Señor, por ti.\n\n2\nManos preciosas, tan lastimadas\nPor mí clavadas en una cruz;\nEn este valle sean mi guía\nY mi alegría, mi norte y luz.\n\n3\nBello costado, en cuya herida\nHalla su vida la humildad;\nFuente amorosa de un Dios clemente\nVoz elocuente de caridad.\n\n4\nTus pies heridos, Cristo paciente\nYo indiferente los taladré;\nY arrepentido, hoy que te adoro\nTu gracia imploro, Señor pequé."
              },
              {
                "idalabanza": 266,
                "numhimnario": 242,
                "nombre": "Sean Bienvenidos",
                "alabanza": "1\nSean bienvenidos, amados hermanos\nEn el bendito nombre de Cristo Jesús\nAlegres gocémonos juntos en esta noche\nCantando y bendiciendo el nombre de Dios.\n\n2\nEl Señor les bendiga los pasos que han dado\nA dar  las buenas nuevas a este lugar\nEn el día glorioso corona tendremos\nPor Cristo el Rey de Gloria que en el cielo está.\n\n3\nEl con sus lindos ojos está contemplando\nAl pueblo ya salvado por su redención\nCantemos alabanzas ahora y siempre\nCon toda nuestra alma y el corazón.\n\n4\nLos hombres en el mundo quedan admirados\nAl ver a los creyentes gozosos aquí.\nAlabaremos al Padre y también al Hijo\nY al Espíritu Santo que hoy está aquí.\n\n5\nSi tu querido amigo quieres esta noche\nPerdón para tu alma que perdida está\nVen a los pies de Cristo muy arrepentido\nY desde este momento salvado serás."
              },
              {
                "idalabanza": 267,
                "numhimnario": 243,
                "nombre": "Sed Valientes",
                "alabanza": "1\nSed valientes, vosotros los cristianos,\nTrabajando en la obra celestial.\nVuestros esfuerzos alcanzarán victoria.\nLa bandera jamás habéis de arrear.\n\nCoro\nAlgún día veremos, Oh hermanos\nCoronado nuestro magno ideal,\nEsparcida por toda nuestra patria\nLa gran obra del Príncipe de Paz.\n\n2\nEs inútil que nos tiendan barrera\nLas legiones que ordenó Satán.\nCorreremos con gozo la carrera,\nCon Cristo, el insigne general.\n\n3\nNi una lágrima empaña las pupilas,\nNi una queja nuestra voz apagará.\nLucharemos con todo entusiasmo\nGuerreando con las huestes de Satán.\n\n4\nAdelante, valientes congregados:\nPreparándonos para el día final.\nTrayendo a Cristo las almas perdidas\nTriunfaremos en la excelsa Canaán."
              },
              {
                "idalabanza": 268,
                "numhimnario": 244,
                "nombre": "Seguid a Jesús",
                "alabanza": "1\nSeguid a Jesús, andad en la luz\nSed fieles a Cristo el Rey.\nSeguidle de amor, luchar con valor\nSed fieles a Cristo el Rey.\n\nCoro\nSed fieles a Cristo el Rey.\nSu gracia abundante jamás faltará\nSu brazo potente os defenderá\nSed fieles a Cristo el Rey.\n\n2\nTentados seréis, conflictos tendréis\nSed fieles a Cristo el Rey.\nA vuestro favor, está el Salvador\nSed fieles a Cristo el Rey.\n\n3\nJamás Jehová os ha de faltar\nSed fieles a Cristo el Rey.\nOs sustentará, el triunfo dará\nSed fieles a Cristo el Rey."
              },
              {
                "idalabanza": 269,
                "numhimnario": 245,
                "nombre": "Sembraré",
                "alabanza": "1\nSembraré la simiente preciosa\nDel glorioso evangelio de amor\nSembraré, sembraré mientras viva\nDejaré el resultado al Señor.\n\nCoro\nSembraré, sembraré\nMientras viva, simiente de amor\nSegaré, segaré\nAl hallarme en la casa de Dios.\n\n2\nSembraré en corazones sensibles\nLa doctrina del Dios de perdón.\nSembraré, sembraré mientras viva;\nDejaré el resultado al Señor.\n\n3\nSembraré en corazones de mármol.\nLa bendita palabra de Dios.\nSembraré, sembraré mientras viva\nDejaré el resultado al Señor."
              },
              {
                "idalabanza": 270,
                "numhimnario": 246,
                "nombre": "Siento En Mi Alma",
                "alabanza": "1\nSiento en mi alma de Dios la bendición\nQue su amor nos quiso conceder.\n//Una vez más estará en comunión;\nEl privilegio de volvernos siempre ver.//\n\n2\nPero al pensar que nos vamos a ausentar\nSiento en mi alma un Profundo dolor\n//Con la esperanza que iremos a estar\nTodos unidos en presencia del Señor.//\n\n3\nAl separarnos de aquí en esta tierra\nNos despedimos con un amor santo\n//tan sólo dolor el corazón encierra\nQuedan visibles las lágrimas y el llanto.//\n\n4\nPero al pasar este horizonte humano\nY ya no estemos aquí en este suelo\n//nos volveremos a ver, amados hermanos\nEn otra fiesta, juntos en el cielo.//"
              },
              {
                "idalabanza": 271,
                "numhimnario": 247,
                "nombre": "Si Me Amenazan Las Olas",
                "alabanza": "1\nCuan navegante cruzando el inmenso mar\nAnhelo llegar triunfante\nY hasta el puerto alcanzar.\n\nCoro\nSi me amenazan las olas del embravecido mar\nComo pasan las olas\nAsí mis pruebas pueden pasar.\n\n2\nNo tengo miedo de lo que ha de venir\nEn Cristo todo el pueblo y por Él sabré vivir.\n\n3\nSi mi débil barquilla ya parece naufragar\nCristo me guarda siempre\nY mis pruebas pueden pasar."
              },
              {
                "idalabanza": 272,
                "numhimnario": 248,
                "nombre": "Soy Bautizado",
                "alabanza": "1\nSoy bautizado como manda el Salvador.\nQue grande gozo siento en mi corazón.\nYa mis maldades las borró mi Salvador;\nQuiero llegar puro y limpio a su mansión.\n\nCoro\nSeguiré a mi Jesús.\nPues para mí lo del mundo se acabó\nY ayudado de su luz\nProseguir en sus camino quiero yo.\n\n2\nAdiós mundo que hasta ayer estuve en ti.\nDonde el pecado destruía mi vivir;\nYo siento gozo desde que me bauticé\nY de volver a pecar mejor morir.\n\n3\nNo veo más que el camino de la fe\nDonde muy pocos han querido caminar\nLe pido a Dios que me guarde en el amor\nPara llegar puro y limpio a su mansión."
              },
              {
                "idalabanza": 273,
                "numhimnario": 249,
                "nombre": "Suenan las trompetas",
                "alabanza": "1\nSuenan las trompetas en el tercer cielo\nY las multitudes van pasando\nEs que van pasando todos los valientes\nQue en la tierra amaron a Cristo Jesús.\n\nCoro\nNo, no, no, no, no, no, no;\nNunca podré de Cristo apartarme.\nNo, no, no, no, no, no, no;\nNunca podré de Él separarme.\nSu gran amor me mostró\nCuando Él vino a salvarme.\nNo, no, no, no, no, no, no;\nNunca podré de Él separarme.\n\n2\nOtros que muy tristes caminan llorando\nEs que van llevando un triste dolor.\nEs que el Juez divino con dedo de fuego\nLes negó la entrada en la hermosa Sión.\n\n3\nTú de cuales eres, ¿de los que se salvan\no de los que buscan la condenación?\nSi quieres salvarte debes esforzarte\nTrabajando siempre por tu Salvador."
              },
              {
                "idalabanza": 274,
                "numhimnario": 250,
                "nombre": "Somos Un Cuerpo En Cristo",
                "alabanza": "1\nSomos un cuerpo en Cristo con diferente don\nDiáconos y ministro y la congregación\nY si en acuerdo vamos, crece la caridad\nSólo no nos quedamos, Jehová nos ayudará.\n\nCoro\nTodos en uno amado, todos en comunión\nSiendo regocijados por nuestra salvación.\n\n2\nEste conjunto en Cristo, tiene alimentación\nÉl es el gran obispo de la congregación\nÉl es el arquitecto que vida al hombre da\nLuego le llama hijo por toda la eternidad.\n\n3\nCristo es la cabeza, Él es el buen pastor\nDe Él vino la promesa, Cristo el redentor\nDe toda esta iglesia, que sirve con verdad\nQue ha amado su palabra, gozará de libertad.\n\n4\nSomos un solo cuerpo, en el Señor Jesús\nConforme al mundo muerto, viviendo en su luz\nSomos participantes de la resurrección\nY entraremos triunfantes, cantándole a Cristo en Sión."
              },
              {
                "idalabanza": 275,
                "numhimnario": 251,
                "nombre": "Soy Peregrino Aquí",
                "alabanza": "1\nSoy peregrino aquí, en este mundo triste\nNo tengo hogar donde morar;\nVoy caminando con muchas dificultades\nPero en el cielo, está mi hogar.\n\nCoro\nHe de luchar, para tener mi hogar con Jesús mi rey\nHe de sufrir, para poder ganar\nUna corona está, allá en el cielo\nQue si soy fiel, la tengo que ganar.\n\n2\nLuchas y tempestad, azotan a mi vida\n¡Hay que dolor! ¡Qué gran dolor!\nMuy fatigado voy y lleno de amarguras\nTodo es por ver a mi Salvador\n\n3\nEn medio del pesar, siento el amor de Cristo\nQue me hace amarle, más y más\nEs una bendición, llevar la cruz de Cristo.\nPero en el cielo está mi hogar."
              },
              {
                "idalabanza": 276,
                "numhimnario": 252,
                "nombre": "Somos Soldados De La Lid",
                "alabanza": "1\nSomos soldados de la lid,\nCon triunfo vamos a luchar\nCon la espada de la fe,\nContra un mundo de maldad.\nNinguno frente nos hará,\nCristo nos capitaneará;\nEn su nombre hay poder\nPara Satanás vencer.\n\nCoro\nEl tenaz combate aquí, pronto cesará,\nEn la playa celestial, se descansará;\nTodo el que en la lucha es fiel, siendo vencedor,\nGalardón recibirá de Cristo el Señor.\n\n2\nLlevando escudo de la fe,\nDardos del mal no herirán,\nPorque a todo luchador,\nArmadura Dios dará\nSi en obediencia y con valor,\nGuardamos siempre así su ley.\nLa victoria el prometió\nCada día gloria a Él."
              },
              {
                "idalabanza": 277,
                "numhimnario": 253,
                "nombre": "¿Soy Yo Soldado De Jesús?",
                "alabanza": "1\n¿Soy yo soldado de la cruz, y siervo del Señor?\nNo temeré llevar su cruz, sufriendo por su amor.\n\nCoro\nDespués de la batalla nos coronará,\nDios nos coronará; Dios nos coronará.\nDespués de la batalla nos coronará,\nEn aquella santa Sión.\nMás allá, más allá, En aquella santa Sión.\nDespués de la batalla nos coronará,\nEn aquella santa Sión.\n\n2\nLucharon otros por la fe; cobarde habré de ser\nPor mi Señor yo pelearé, confiando en su poder.\n\n3\nEs menester que sea fiel, que nunca vuelva atrás\nQue siga siempre en pos de Él y me guiará en paz."
              },
              {
                "idalabanza": 278,
                "numhimnario": 254,
                "nombre": "Soy Viajero Del Reino",
                "alabanza": "1\nSoy viajero del reino celestial\nPoco falta para poder llegar,\nEl cansancio me quiere dominar\nSi descanso me puedo aquí quedar.\n\n2\nMuchos hay que me quieren detener\nY me dicen mañana seguirás\nYo les digo que no me puedo detener\nSi me quedo yo también voy a perecer.\nAl principio de mi viaje encontré\nA dos hombres que volvían otra vez y\nEntonces muy ansioso pregunté\n¿En qué día a qué hora llegaré?\n\n3\nMe dijeron tu no llegarás jamás\nEs muy lejos y el camino duro es\nMejor éste que más ancho y fácil es\nY les dije aunque muera aquí me voy.\n\n4\nHay viajeros que por mal camino van\nNo recuerdan que el angosto es el mejor\nHay hermano no lo vayas a dejar,\nQue éste lleva hasta la patria celestial."
              },
              {
                "idalabanza": 279,
                "numhimnario": 255,
                "nombre": "Sabe Dios",
                "alabanza": "1\nHermano que buscas de Cristo\nQuiero recordarte que Dios es amor\nSi muestras que tienes prejuicios\nOrgullo y envidia no tienes temor\n\nTú tienes que amar a tu hermano\nY darle la mano si amas a Dios\n//recuerda que claro te ha dicho si no amas\nA tu hermano; no amas a Dios.//\n\nCoro\nSabe Dios si ese ser a quien tu ahora\nDesprecias puso Dios para darle a tu vida\nUna prueba si así es Dios\nSí mi Dios; así es mi Dios, si mi Dios.\nTampoco debes olvidarte ni por un instante\nDe hacer caridad.\n\nPues ésta y el amor están juntos\nMi Dios me lo ha dicho y El habla verdad\nNo olvides nunca al despreciado\nNi al necesitado de él ten piedad\n//sin ella no mires al cielo\nPorque el desconsuelo Cristo te dará.//"
              },
              {
                "idalabanza": 280,
                "numhimnario": 256,
                "nombre": "Sin Dios No Podrás Caminar",
                "alabanza": "1\nSin Dios no podrás caminar\nPorque Él es tu ayuda y fortaleza\nSin Dios no podrás caminar.\n\nCoro\nCuando te sientas cansado\nY tu cruz sea pesada\nClama al Señor Jesucristo\nY Él te ayudará\nSin Dios no podrás caminar.\n\n2\nSin Dios no podrás caminar\nPorque Él es tu ayuda y fortaleza\nSin Dios no podrás caminar."
              },
              {
                "idalabanza": 281,
                "numhimnario": 257,
                "nombre": "Si El Mundo En Vez De Rosas",
                "alabanza": "1\nPunzante los abrojos del camino\nNos vienen fe y gozo a confirmar\nY enseñan de este modo al peregrino\nQue el mundo no podrá ser nuestro hogar.\n\nCoro\nSi en sendas escarpadas tú estás\nNo temas el Señor te ayudará,\nSi el mundo en vez de rosas te da espinas,\nEl Señor en rosas todas cambiará.\n\n2\nSi a nuestra paz azotan tempestades\nTras tempestades calma llegará\nQué importa que haya siempre adversidades\nLa mano del señor nos sostendrá."
              },
              {
                "idalabanza": 282,
                "numhimnario": 258,
                "nombre": "Trigo Soy",
                "alabanza": "1\nLa cosecha ya se acerca en el cielo,\nEn los campos del Señor, del Señor;\nAunque la cizaña crezca juntamente con el trigo,\nTú la apartarás Señor.\n\nCoro\nTrigo soy, trigo soy, del granero, del granero\nDel Señor, del Señor, por la sangre de mi Cristo\nY el poder de Jesucristo, a su granero yo voy.\n\n2\nYa parece que contemplo a mi Jesús,\nContemplando su labor, su labor;\nContemplando la semilla que sembró\nCon alegría en mi pobre corazón.\n\n3\nLos graneros del Señor son muy hermosos,\nLos contemplo con amor, con amor;\nDe los que trabajamos y no nos avergonzamos\nDel los campos del Señor.\n\n4\nLos trigales del Señor son muy hermosos,\nAlabando al Señor con amor;\nPor doquiera la semilla está siendo esparcida,\nLa cosecha del Señor."
              },
              {
                "idalabanza": 283,
                "numhimnario": 259,
                "nombre": "Trabajaré",
                "alabanza": "1\nAhora vivo trabajando en esta viña,\nPorque el maestro así lo ordenó.\nVeo sarmiento también veo las uvas,\nTengo esperanza que también las comeré.\n\nCoro\nTrabajaré con seguridad de mi alma\nQue al terminar mi carrera le veré.\nTrabajaré con seguridad de mi alma\nQue al terminar mi carrera le veré.\n\n2\nVamos saliendo de las calles de Egipto,\nVamos saliendo con gran seguridad;\nVamos llegando a la tierra prometida,\nDonde Moisés también las contempló.\n\n3\nCon este himno te saludo amado hermano,\nCon la esperanza en nuestro Salvador;\nSólo esperamos que seas prosperado\nEn esta tierra de prueba y de dolor."
              },
              {
                "idalabanza": 284,
                "numhimnario": 260,
                "nombre": "Trabajemos Ahnelantes",
                "alabanza": "1\nTrabajemos anhelantes en la viña del Señor\nPues hay muchos campos blancos para ir a trabajar\nY la mies esta madura hay que irla a segar\nPorque viene el adversario y se la quiere robar\n \nCoro\nAdelante vamos compañeros\nAdelante vamos sin temor\nLa victoria esta segura con Jesus no hay que temer\nPorque El va con nosotros y nos hara vencer\n \n2\nVa pasando la mañana tiempo es ya de trabajar\nYa la noche nos arropa con su grande oscuridad\nLas tinieblas nos rodean y nos pueden agobiar\nHermanos perseveremos y oremos sin cesar\n \n 3\nLevantemos la bandera el estandarte de la fe\nY luchemos muy valientes con valor sin vacilar\nJesucristo es nuestra ayuda El es nuestro capitan\nY por El seran vencidas las huestes de satan"
              },
              {
                "idalabanza": 285,
                "numhimnario": 261,
                "nombre": "Tan Ciego Caminas",
                "alabanza": "1\nTan ciego caminas en densas tinieblas\nY Cristo te llama a ti, pecador.\nÓyelo llamando, te dice que vuelvas,\nEl que quiere llevarte por senda mejor.\n\n2\nTan necio caminas confiando en ti mismo.\nDesprecias la voz de Cristo, el Señor.\nTan necio caminas con rumbo al abismo;\nA donde por siempre quedará el pecador.\n\n3\nLa flor más hermosa marchita ligero,\nAsí es tu vida, aquí pecador;\nTu vida presente es una quimera;\nTan sólo, Es eterna en Cristo el Señor.\nAcepta a Cristo, el Señor de señores;\nLugar preparó para ti también.\nSi quieres dichoso vivir entre flores,\nAllá en el glorioso jardín del Edén."
              },
              {
                "idalabanza": 286,
                "numhimnario": 262,
                "nombre": "Te Seguiré",
                "alabanza": "1\nQuiero, Señor estar en tu presencia,\nQuiero gozar tu santa comunión;\nQuiero tener de ti la santa unción\nY llevar tu palabra por doquiera.\n\nCoro\nTe seguiré, te seguiré, Señor,\nTe alabaré, te alabaré, Señor,\nY contaré tu gran amor,\nPues sólo en ti hay Salvación.\n\n2\nLávame, Señor, el alma cada día\nLléname de tu Espíritu consolador;\nSer un vencedor del mundo y su poder\nEs todo cuanto mi alma ansía.\n\n3\nHaz, Señor, que pueda guiar los pecadores,\nQue a tus santos pies se puedan humillar,\nBuscando salvación, recibiendo perdón,\nPara estar contigo en la gloria.\n\n4\nRuge tempestad, Tú eres roca mía;\nSopla el vendaval, Tú eres mi sostén\nParece naufragar mi alma en alta mar;\nJesús, mi Salvador, es mi guía."
              },
              {
                "idalabanza": 287,
                "numhimnario": 263,
                "nombre": "Testimonio",
                "alabanza": "1\nNo me he cansado Señor de andar contigo\nAl dar un paso de tu amor me inspira más\nAsí a la gloria me llevas avanzando,\nY como Enoc, mi ser transportarás.\n\nCoro\nPermíteme guardar mi testimonio\nHay quien lo pierde muy cerca de entrar\nComo moisés llegando a la frontera\nSólo alcanzó la tierra a divisar.\n\n2\nSi voy contigo Señor debo escucharte\nCuando me indicas tu santa voluntad.\nY si confundido tu voz como Samuel\nVuélveme hablar y al fin responderé."
              },
              {
                "idalabanza": 288,
                "numhimnario": 264,
                "nombre": "Tendrás Que Renacer",
                "alabanza": "1\nUn hombre de noche llegóse a Jesús,\nBuscando la senda de vida y de luz,\nY Cristo le dijo Si a Dios quieres ver\nTendrás que renacer\n\nCoro\nTendrás que renacer:\nDe cierto, de cierto te digo a ti,\nTendrás que renacer.\n\n2\nSi acaso a los cielos tú quieres entrar\nY allí con los santos poder descansar;\nSi quieres la vida eterna obtener\nTendrás que renacer.\n\n3\nAmigo, no deber jamás desechar,\nPalabras que Cristo dígnese hablar,\nSi tú alma no quieres llegar a perder,\nTendrás que renacer.\n\n4\nHermanos se han ido con Cristo a morar,\nA quienes un día querrás encontrar,\nPues esta proclama hoy debes creer;\nTendrás que renacer."
              },
              {
                "idalabanza": 289,
                "numhimnario": 265,
                "nombre": "Tuyo Soy, Jesús",
                "alabanza": "1\nTuyo soy, Jesús, ya escuché la voz\nDe amor hablándome aquí;\nMás anhelo en las alas de fe subir;\nY más cerca estar de ti.\n\nCoro\nAún más cerca, cerca de tu cruz,\n¡Llévame, oh Salvador!\nAún más cerca, cerca de tu cruz,\n¡Llévame, oh buen pastor!\n\n2\nA veces triste estoy y caminando voy\nEn medio de la densa nube del dudar\nEn la neblina del mar me oculta del fanal\nY sólo porque hablé con Cristo luz habrá.\n\n3\nNi duda ni temor podrá atormentar\npues Cristo  que es mi amigo fiel me ayudará\nEl oye mi oración, conoce mi aflicción\nMás sólo porque hablé con Cristo salvo soy."
              },
              {
                "idalabanza": 290,
                "numhimnario": 266,
                "nombre": "Tuyo Soy Mi Señor",
                "alabanza": "1\nTuyo soy mi Señor, tuya es mi vida\nMi carne es débil; peno Tú eres fuerte.\nAyúdame, Señor, llevando así\nMi mano de la tuya hasta la muerte.\n\n2\nQue no sigan a mi alma los placeres\nDe este mundo engañador es mi deseo;\nSólo el querer lo que Tú sólo quieres.\nSólo en Ti confiar es mi deseo.\n\n3\nAtrás quedan los rastros tentadores\nCon que engañan a la oveja descarriada.\nEl mundo y sus halagos seductores.\nLejos de Ti, Señor no quiero nada.\n\n4\nLimpia, Señor, mi corazón de mis maldades.\nBorra el dolor de mis iniquidades\nAyúdame, Señor, quiero ser bueno\nQue huya de mí la sombra del pecado,\n\n5\nY como Juan, tu siervo bien amado,\nDéjame así reclinar bajo tu seno\nQuiero vivir en tus brazos entregado\nY de tu Santo Espíritu ser lleno."
              },
              {
                "idalabanza": 291,
                "numhimnario": 267,
                "nombre": "Tu Inmenso Amor",
                "alabanza": "1\nTe alabaré Señor en todo tiempo\nPorque en peligra estaba y me libraste\nDe esta vida miserable y tenebrosa\nDonde vivía equivocado sin tu amor.\n\nCoro\nReconozco Señor tu amor inmenso\nAmor tan grande demostrado en una cruz\nPor eso humillado a tu presencia\nVengo a rogarte implorando tu perdón.\n\n2\nQuerido amigo escucha hoy este canto\nDonde expresamos la gratitud de Dios\nY si le amáis y guardáis sus mandamientos\nAllá en el cielo una corona te dará."
              },
              {
                "idalabanza": 292,
                "numhimnario": 268,
                "nombre": "Un Día Cristo Volverá",
                "alabanza": "1\nUn día Cristo volverá,\nPromesa fiel, no ha de faltar\nComo se fue, así vendrá,\nY su pueblo ha de ver al Rey Jesús.\n\nCoro\nMuy pronto, sí Jesús vendrá\nY alegre le verá su pueblo\n¡Velad!, ¡Orad!, el Rey vendrá,\nLos suyos arrebatará.\n\n2\nLos mensajeros del Señor,\nAfirman que vendrá Jesús,\nY el buen y fiel consolador,\nLas promesas ya sacó a plena luz.\n\n3\n¡Oh, gloria sin comparación,\nSerá mirar a nuestro Rey!\nReciban todos bendición,\nEsperando ese día Con su grey.\n\n4\n¡Oh bienvenido, Rey Jesús!\nTu Iglesia esperando está\nMuy pronto ha de ver su faz,\nY gozar de sus laureles siempre allí."
              },
              {
                "idalabanza": 293,
                "numhimnario": 269,
                "nombre": "Unámonos, Hermanos",
                "alabanza": "1\nUnámonos, hermanos, Jesús está a la puerta,\nJuntemos nuestras manos y oremos al Señor;\nQue todas las fronteras El Padre mire abiertas.\nNo puede haber fronteras donde reina el amor.\n\nCoro\nAlzad, alzad, alzad vuestra bandera.\nBandera tan gloriosa de amor y santidad\nUnámonos hermanos, que Cristo pronto viene\nY estas hermosas nuevas llevemos por doquier.\n\n2\nOremos todos juntos, por nuestra patria amada\nOremos por la bella América Central\nOíd la voz de Cristo, su amor a nada iguala\nAmados. El nos dice con su voz celestial.\n\n3\nDejemos que las olas del odio se disuelvan,\nDejemos que nos una su brazo protector;\nQue Dios no dé su gracia pues El nos ama tanto,\nUnámonos hermanos, de todo corazón.\n\n4\nUnámonos ahora, unámonos orando\nMuy pronto las trompetas los aires rasgarán;\nMañana será tarde, ahora es el momento,\nUnámonos, hermanos no hay tiempo que perder."
              },
              {
                "idalabanza": 294,
                "numhimnario": 270,
                "nombre": "Una Plática Con Cristo",
                "alabanza": "1\nPerdido andaba yo, mas Cristo me encontró\nUn rayo de celeste luz mi alma alumbró mi\nNombre escrito está en la mansión de paz\nMás sólo porque hablé con Cristo salvo soy.\n\nCoro\nAhora ven a platicar con Cristo\nDile todo lo que te entristece\nOye, oye tu oración; contesta, si, contestará\nMás cuando sientas que El oyó tu ruego\nY tú sientas del amor el fuego\nDile al mundo que el hablar con Cristo es la razón.\n\n2\nA veces triste estoy y caminando voy\nEn medio de la densa nube del dudar\nEn la neblina del mar me oculta del fanal\nY sólo porque hablé con Cristo luz habrá.\n\n3\nNi duda ni temor podrán atormentar\nPues Cristo que es mi amigo fiel me ayudará\nEl oye mi oración, conoce mi aflicción\nMas sólo porque hablé con Cristo salvo soy."
              },
              {
                "idalabanza": 295,
                "numhimnario": 271,
                "nombre": "Un Corazón Para Cristo",
                "alabanza": "1\nYo tengo un corazón que es Para Cristo\nPues mí alma rescató de la maldad,\nY hoy quiero obedecer a mi Señor Jesús\nTambién fiel en su amor perseverar\nPues mi alma rescató de la maldad\n\nCoro\nYo fui un peregrino sin amor y fe\nY anduve en compañía del dolor,\nTormento era mi pan y desesperación\nEsclavo era en el mal de mi pobre ser.\n\n3\nMás Cristo por mi mal sus brazos santos extendió\nY allá en la cruz colgado mis pecados perdonó,\n¡Oh, gloria a mi Señor! ¡Oh, gloria por su amor!\nÉl es el dueño de mi corazón."
              },
              {
                "idalabanza": 296,
                "numhimnario": 272,
                "nombre": "Unid Los Cantos",
                "alabanza": "1\nUnid los cantos todos los santos, con dulce voz\nCon reverencia porque en presencia estáis de Dios\n\nCoro\nBienvenidos seáis hermanos,\nEn el nombre de Cristo Jesús,\nHoy unidos nos gozamos al saber,\nQue nos une su amor.\nDemos gracias, por ser salvos,\nY nuestra alma sienta gratitud,\n//Porque sólo Jesús nos da vida y salud\nY la gloria al que lleva su cruz//\n\n2\nTodo cristiano que ame a su hermano de corazón\nNo ve fronteras va por doquiera sembrando amor.\n\n3\nMuy pronto unidos los escogidos verán a Dios;\nAllá en el cielo tendrán el premio por su labor."
              },
              {
                "idalabanza": 297,
                "numhimnario": 273,
                "nombre": "Unidos En Espíritu",
                "alabanza": "1\nUnidos en espíritu al coro celestial\nCantemos con los ángeles un cántico triunfal;\nY si vertimos lágrimas al frente de la cruz\nRebose hoy de júbilo, pues vive el buen Jesús.\n\n2\nLo que en el triste Gólgota derrota pareció,\nEn el sellado túmulo en triunfo se cambió;\nVencido está el bárbaro menguando su poder\ny no el mortal su súbdito de hoy más habrá de ser.\n\n3\nDel moría allá en la cúspide se obró la salvación,\nAllí se ostenta el lábaro de nuestra redención;\nY sueltos ya los vínculos de la mortalidad,\nLa tumba abierta es símbolo de nuestra libertad.\n\n4\nJesús de gloria, Príncipe, autor de nuestra paz,\nDirígenos benévola tu esplendorosa faz;\nY acepta el dulce cántico de nuestra gratitud,\nPor tu valiosa dádiva de la eternal salud."
              },
              {
                "idalabanza": 298,
                "numhimnario": 274,
                "nombre": "Un Día Compraste Mi Alma",
                "alabanza": "1\nUn día compraste mi alma\nPor eso es muy tuya Señor,\nEn densas tinieblas me viste\nY sólo tu amor me salvó.\nMe diste la luz de una aurora\nQue un día con su luz me alumbró,\nQuitaste dolor y tristeza,\nMe diste la paz y el perdón.\n\nCoro\nYo soy tuyo y tuyo seré\nNo permitas que pierda la fe,\nEl maligno me quiere apartar\nPero tuyo y muy tuyo seré.\n\n2\nEl día tan feliz yo recuerdo.\nCuando por mi dueño salí,\nDejando ese Egipto perverso,\nQue sólo me hizo sufrir.\nEscarnio, dolor, e igdomino\nSufrió mi bendito Señor,\nSatán con su furia me sigue\nNo quiere que yo sea de Dios."
              },
              {
                "idalabanza": 299,
                "numhimnario": 275,
                "nombre": "Un Lema",
                "alabanza": "1\nEste nuestro lema, Llevando el Evangelio\nDecirles a las almas, de Cristo el Señor;\nDiciéndoles de Cristo, que El salva a los perdidos\nY sana a los enfermos, les habla del perdón.\n\n2\nHablándoles de Cristo, cómo cambió mi vida\nSin conocerle yo, por eso yo les digo\nQue solamente Dios, tenernos en el cielo\nUn Dios que está mirando, vivimos alabando,\nEl es el Buen Pastor.\n\n3\nEl cuida con cariño, a todas sus ovejas\nQue viven en la tierra viviendo, por la fe,\nEl tiene sus oídos tan prestos\nPara oírme cuando le hablamos dos\nPor eso yo les digo, que solamente Dios."
              },
              {
                "idalabanza": 300,
                "numhimnario": 276,
                "nombre": "Un Grano De Arena",
                "alabanza": "1\nUn grano de arena en ancho desierto\nEs el hombre en la presencia del Señor\nUn grano de arena para ser un templo\nDonde habita el Santo Espíritu de Dios.\n\n2\nUn grano de arena fui yo en el desierto\nPero Cristo su forma El medio.\nHoy yo soy llamado para ser un templo,\nDonde habita el Santo espíritu de Dios.\n\n3\nUn grano de arena fue el apóstol Pablo.\nPero Dios para su obra lo llamó;\nUn grano de arena para ser un templo.\nDonde habita el Santo Espíritu de Dios.\n\n4\nUn grano de arena, pecador tú eres\nPero puede Dios hacer un templo en ti\nUn grano de arena Para ser un templo\nDonde habita el Santo Espíritu de Dios,"
              },
              {
                "idalabanza": 301,
                "numhimnario": 277,
                "nombre": "Una Fuente En El Desierto",
                "alabanza": "1\nUna fuente en el desierto\nFue Jesús mi Salvador,\nCuando sediento yo andaba\nEn los placeres del mal,\n//Sin encontrar un amigo\nQue me pudiera ayudar//\n\nCoro\nBendito samaritano,\nTú me llevaste al mesón,\nDonde atendieron las quejas\nDe mi pobre corazón;\nDonde vendaron mi alma\nDe las heridas del mal,\nDonde bebí el agua fresca\nDe la fuente eternal.\n\n2\nPecador atormentado,\nMira hoy mismo hacia la cruz\nDonde te espera el Cordero\nPara darte la salud.\nNo resistas su llamado.\nDale hoy tu corazón,\nEl cambiará tu desierto\nEn eterna salvación."
              },
              {
                "idalabanza": 302,
                "numhimnario": 278,
                "nombre": "Vagué Yo Sin Jesús",
                "alabanza": "1\nEn el pecado siempre vagué yo sin Jesús,\nHasta que por su gracia me amaneció la luz,\nY desde que soy salvo no temo nada aquí,\nAhora siento un cambio, El es mi todo aquí.\n\n2\nEl es mi todo aquí, El me salvó a mí,\nSu paz y amor ha puesto en mi alma bien lo sé,\nEl es mi todo aquí, me guarda por la fe.\nOh, gloria a su nombre, El es mi todo aquí.\n\n3\nHoy quiero yo decirte la historia de la cruz,\nCómo puedes ser salvo, creyendo en Jesús;\nVenid a mí, te llama, venid así a mí\nEl puede hoy salvarte, El es mi todo aquí."
              },
              {
                "idalabanza": 303,
                "numhimnario": 279,
                "nombre": "Ven Señor Jesús",
                "alabanza": "1\nCuando la Iglesia ha de salir para encontrar a su Señor,\nCon ese grupo yo también he de viajar\nY allá en las nubes me uniré, con los salvados por su amor\nY entonaremos el gran Coro celestial.\n\nCoro\nVen mi Jesús, ven mi Jesús\nNo tardes más, no tardes más\nYo quiero ir, yo quiero ir al más allá,\nEn tu mansión quiero vivir\nY tú presencia disfrutar;\nVen mi Jesús, ven mi Jesús\nNo tardes más.\n\n2\nAcá en la tierra te honraré pero también te alabaré\nCon este canto allá en la patria celestial\nDonde tu iglesia habitará y eternamente entonará\nEsta dulce alabanza a tu gloriosa majestad."
              },
              {
                "idalabanza": 304,
                "numhimnario": 280,
                "nombre": "Viene otra vez",
                "alabanza": "1\nCantan los angeles con dulce voz\nCanten los hombres con sonora voz\nCristo vendra nuestro Rey vencedor\nCristo vendra otra vez\n \nCoro\nViene otra vez viene otra vez\nEn gloria viene al mundo otra vez\nViene otra vez viene otra vez\nEl viene pronto a reinar\n \n2\nVed en la tierra los aires y el mar\nGrandes señales cumpliendose ya\nTodo indicando que pronto vendra\nNuestro glorioso Señor\n \n3\nTodos los muertos en Cristo saldran\nDe sus sepulcros y alegres iran\nPara encontrar a su Rey subiran\nCristo vendra otra vez\n \n4\nVen en las nubes oh buen Salvador\nVen a la tierra te ruego Señor\nVen que tu iglesia te espera Jesus\nCristo vendra otra vez"
              },
              {
                "idalabanza": 306,
                "numhimnario": 281,
                "nombre": "Vida Nueva",
                "alabanza": "1\n//Ya mi vida se la debo a Jesús,\nPorque El murió en la cruz por mí.//\n\nCoro\n//Vida nueva encontré en la cruz de Jesús\nPorque Cristo mi deuda pago.//\n\n2\n//Yo me rindo a los pies de Jesús, mi Señor\nPorque fin un infiel pecador.//\n\n3\n//El Espíritu Santo te llama a ti,\nVen a Cristo y salvo serás.//"
              },
              {
                "idalabanza": 307,
                "numhimnario": 282,
                "nombre": "Viví En El Mundo Sin Paz",
                "alabanza": "1\nViví en el mundo sin paz\nSin esperanza y sin Dios Hasta que una noche\nA Cristo me entregue.\n\nCoro\nEl ha borrado ya mi maldad\nDe mis pecados cuenta no habrá\nSanto Como es El mi alma redimió.\n\n2\nEn Cristo halle santa paz\nMi vida entera El cambio\nÉl es mi roca eterna\nMi amado Salvador."
              },
              {
                "idalabanza": 308,
                "numhimnario": 283,
                "nombre": "Vivo Por Fe",
                "alabanza": "1\nNo tengo cuidados, ni tengo temor\nDe lo que me espera aquí\nConfío tan sólo en mi Salvador\nEl cuida siempre de mí.\n\nCoro\nVivo por fe, en mi Salvador\nNo temeré, es fiel mi Señor\nEn dura lid no me dejará\nYo vivo por fe, El me sostendrá.\n\n2\nVendrán tempestades, lo sé yo muy bien\nLa fuerza del sol faltará\nAmigos dejarme lo pueden también\nJesús siempre me sostendrá.\n\n3\nUn día vendrá otra vez el Señor\nAl cielo nos llevará.\nCesarán el afán y el dolor\nDios todo lo dominará."
              },
              {
                "idalabanza": 309,
                "numhimnario": 284,
                "nombre": "Vida Eterna El Prometió",
                "alabanza": "1\nVida eterna El prometió, El Prometió\nAl que en El, al que en El quisiera cree,\n//Y estarás allá con El,\nPorque así fue el anuncio que El dio.//\n\nCoro\nVen a la luz que te da Jesús,\nVen a la luz que te da Jesús,\n//Y vivirás allá con Él\nY para siempre tú no morirás;//\n\n2\n¡Aleluya sea a Él! ¡Sea a Él!\nPor el amor, por el amor que nos mostró\n//Porque no quiso perder\nLo que el Padre en sus manos le dio.//\n\n3\nViene el tiempo de aflicción, de aflicción\nCuando ya, cuando ya no habrá lugar,\n//Mas ahora el Salvador\nHa venido a su pueblo a salvar.//\n\n4\nNo te tardes, pecador, Pecador,\nEn venir, en venir a tu Señor,\n//Que mañana llorarás\nPor la pena que impuso tu error.//"
              },
              {
                "idalabanza": 310,
                "numhimnario": 285,
                "nombre": "Visión Pastoral",
                "alabanza": "1\nEran cien ovejas que había en el rebaño,\nEran cien ovejas que amante Cuidó.\nPero en una tarde al contarlas todas\nLe faltaba una, le faltaba una y triste lloró.\n\nCoro\nLas noventa y nueve dejó en el aprisco\nY por las montañas a buscarla fue,\nLa encontró gimiendo, temblando de frío.\nUngió sus heridas, ungió sus heridas.\nY al redil volvió.\n\n2\nEsta misma historia vuelve a repetirse,\nTodavía hay ovejas que errabundas van;\nVagando en el mundo sin Dios, sin consuelo\n//Sin Dios. Sin consuelo// Y sin su perdón.\n\n3\nJesucristo espera a todos los hombres.\nPara que le acepten como Salvador;\nPorque El no quiere que nadie se pierda\nMás que sean salvos, más que sean salvos\nPor su gran amor."
              },
              {
                "idalabanza": 311,
                "numhimnario": 286,
                "nombre": "Visita",
                "alabanza": "1\nCuando te visite el Príncipe de Paz\nTe sentirás alegre, te sentirás feliz.\nSentirás el gozo,\nGozo celestial del Dios de lo alto\nQue todo lo da.\n\nSoy feliz en el Príncipe de Paz,\nSoy feliz en el Príncipe de Paz,\nSoy feliz en el Príncipe de Paz,\nGlorias aleluyas, al Príncipe de Paz.\n\nTodos los creyentes deben participar\nDe esta gran promesa que da nuestro Dios.\nTodo el que recibe algún don tendrá\nTodo el que recibe al Príncipe de Paz,\n\nSoy feliz en el Príncipe de Paz,\nSoy feliz en el Príncipe de Paz,\nSoy feliz en el Príncipe de Paz,\nGlorias aleluyas, al Príncipe de Paz."
              },
              {
                "idalabanza": 312,
                "numhimnario": 287,
                "nombre": "Voy A Contar Las Grandezas Del Señor",
                "alabanza": "1\nVoy a contar las grandezas del Señor,\nA un pueblo santo que hoy se ha congregado,\nVoy a contarles una nueva canción,\nOídos todos en la congregación.\n\nCoro\n//Gozaré con El, gozaré yo con El,\nAl hallarme en la presencia del Señor.//\n\n2\nTe alabaré con humilde corazón,\nCuando aperciba los juicios de Jehová\nSus estatutos guardaré, Señor\nPara gozarme en la patria celestial.\n\n3\nConfirma tu palabra Oh Jehová\nQuita de mí el oprobio de temor\nY no me quites de mi boca el hablar\nEn ningún tiempo la palabra de verdad.\n\n4\nNo desmayes en la obra del Señor\nSiempre adelante teniendo comunión\nPerfeccionándonos en satisfacción\nEl Señor la promesa nos dará.\n\n5\nCantemos todos unidos al Señor\nReconocer que Jehová es nuestro Dios\nPues El nos hizo a nosotros mismos\nUn pueblo suyo bendito del Señor."
              },
              {
                "idalabanza": 313,
                "numhimnario": 288,
                "nombre": "Vuestra Campaña De Oración",
                "alabanza": "1\nNuestra iglesia está en campaña\nEn campaña de oración\nEsperando las promesas\nQue las cumpla el Señor.\nOlvidándome del mundo\nAnte Dios vengo a orar,\nEn compañía de la iglesia\nBendiciones esperar.\n\n2\nSi a tu hermano has ofendido\nHoy puedes reconciliar\nPara que la iglesia pueda\nTodo el tiempo prosperar,\nPero si no reconcilias\nUn castigo te vendrá\nPorque no amas a tu hermano\nBendiciones no tendrás.\n\n3\nYo soy la vid verdadera\nMi padre es el labrador\nTodo aquel que no dé frutos\nEn el fuego morirá.\nSi en amor todos estamos\nPediremos al Señor,\nQue bendiga esta campaña\nCampaña de oración."
              },
              {
                "idalabanza": 314,
                "numhimnario": 289,
                "nombre": "Yo Vagaba Mucho Tiempo",
                "alabanza": "1\nYo vagaba mucho tiempo en el error,\nAgobiado en el pecado y el temor,\nCuando vi al Salvador.\nY escuche su tierna voz,\nMi Jesús me hizo libre por su amor.\n\nCoro\nLibre estoy, libre estoy,\nPor la gracia de Jesús libre estoy;\nLibre estoy, libre estoy,\nAleluya, por la fe libre estoy.\n\n2\nYo vagaba mucho tiempo en el error,\nSin pensar en el amor del salvador;\nYo vagaba más y más Lejos de mi redentor,\nMas ahora por su muerte libre estoy.\n\n3\nYo vagaba mucho tiempo en el error\nMas ahora quiero andar con mi Señor,\nQuiero oír su tierna voz\nY seguirle siempre en pos,\nGloria, gloria sea nuestro buen pastor."
              },
              {
                "idalabanza": 315,
                "numhimnario": 290,
                "nombre": "Ya No Hay Tristeza",
                "alabanza": "1\nYa no hay tristeza en este mundo para mí\nNi soy esclavo del Pecado como ayer\nSi mi Jesús llenó de su gracia mi ser,\n¡Para qué temer si suyo soy y mío es El!\n\n2\nY cuando andaba en este mundo de maldad\nY mi Jesús vino a salvarme por su amor\nPuso en mi corazón felicidad y amor,\nPues en este mundo El es luz y salvación.\n\n3\nMi salvación se la debo a mi Jesús\nPues con su sangre El me vino a salvar\nSi mi Jesús sufrió martirios y dolor\nPara qué temer si Cristo es mí Salvador."
              },
              {
                "idalabanza": 316,
                "numhimnario": 291,
                "nombre": "Yo No Camino Solo",
                "alabanza": "1\nYo no camino solo, conmigo va Jesús\nEn sanas alegrías en Pruebas y en dolor\nCuando la noche venga me guiará su luz\nPues nunca me abandona mi tierno Salvador.\n\nCoro\nJesús conmigo viaja a quién yo temeré\nEn mi barquilla frágil siempre caminaré,\nSi surgen tempestades en El me esconderé\nLlegando al bello puerto mi barco arribaré.\n\n2\nSi el mar se agita airoso, Si surge tempestad\nYo busco en mi barquilla el rostro de Jesús.\nY al verlo que allí viaja se calma mi ansiedad.\nSe tornan mis tinieblas en densa claridad.\n\n3\nNo salgas de mi barco sin. Ti no viajaré\nSe perdería mi rumbo en la oscuridad\nPero si Tú te quedas mi viaje seguiré\nHacia las bellas playas de la eternidad."
              },
              {
                "idalabanza": 317,
                "numhimnario": 292,
                "nombre": "Yo Espero El Día Alegré",
                "alabanza": "1\nYo espero el día alegre cuando Cristo volverá\nPues vendrá al mundo pronto y nos arrebatara;\n¡Oh qué gozo este pensamiento a mi alma da;\nEl que Cristo venga al mundo otra vez!\n\nCoro\nOh! Jesús vendrá al mundo otra vez,\nSí, Jesús vendrá al mundo otra Vez;\nLe veremos en las nubes con los ángeles de luz,\nCuando Cristo venga al mundo otra vez.\n\n2\nLa venida de Jesús será el remedio del dolor\nQue aflige siempre a este pobre mundo pecador;\nToda lágrima se enjugará por nuestro Salvador\nCuando Cristo venga al mundo otra vez.\n\n3\nLlegarán los santos a Sión con gozo eternal,\nY en todo el santo monte nada daña ni hace mal\nPues conocerán a Dios, entonces todos por igual,\nCuando Cristo venga al mundo otra vez.\n\n4\nEl pecado, pena y muerte en este mundo cesarán\nMártires y santos con Jesús por siempre reinarán\nCada alma gozará de paz perfecta, sin afán,\nCuando Cristo venga al mundo otra vez."
              },
              {
                "idalabanza": 318,
                "numhimnario": 293,
                "nombre": "Yo Sólo Espero Ese Día",
                "alabanza": "1\nYo sólo espero ese día cuando Cristo volverá\nYo sólo espero ese día cuando Cristo volverá\nAfán y todo trabajo para mi terminará.\n//Cuando Cristo venga y a su Reino me llevará.//\n\n2\nYa no me importa que el mundo me desprecie por doquier.\nPues ya no soy de este mundo soy del Reino celestial\nSólo espero ese día cuando me levantaré,\n//De la tumba fría con un cuerpo ya inmortal.//\n\n3\nEntonces allí triunfante victorioso ascenderé\nA Jesucristo en las nubes, cara a cara le veré\nAllí no habrá más afanes ni tristeza para mí\n//Con los redimidos al Cordero alabaré.//"
              },
              {
                "idalabanza": 319,
                "numhimnario": 294,
                "nombre": "Y No Tardará",
                "alabanza": "1\nUn poco un poquito de tiempo esperamos\nAl que ha de venir Jesús pronto vendrá.\nOrando leyendo cristianos velemos;\nQue pronto oiremos el grito aquí está.\n\nCoro\nY no tardará y no tardará.\nCon mando y con voz de un Arcángel del cielo.\nA son de trompeta El Señor bajará,\nAsí lo esperamos con gozo Y anhelo\nA muertos y a vivos El recogerá.\n\n2\nLos muertos en Cristo serán los primeros\nQue al mando de Dios todos despertarán;\nY luego los vivos seremos postreros\nY a todos unidos nos levantará.\n\n3\nMuy pronto Jesús viene envuelto en su gloria\nY a todos los santos nos levantará.\nJesús pronto viene con sus galardones\nSirvámosle fieles y en santidad."
              },
              {
                "idalabanza": 320,
                "numhimnario": 295,
                "nombre": "Yo Quiero Trabajar Por El Señor",
                "alabanza": "1\nYo quiero trabajar por el Señor,\nConfiando en su palabra y en su amor,\nQuiero yo Cantar y orar,\nY ocupado siempre estar en la viña del Señor.\n\nCoro\nTrabajar y orar\nEn la viña, en la viña del Señor\nSi mi anhelo es orar\nY ocupado siempre estar\nEn la viña del Señor.\n\n2\nYo quiero ser obrero de valor,\nConfiando en el poder del Salvador,\nEl que quiera trabajar,\nHallará también lugar En la viña del Señor.\n\n3\nYo quiero cada día trabajar,\nY esclavos del pecado libre estar\nConducirlos a Jesús\nNuestra guía, nuestra luz,\nEn la viña del Señor."
              },
              {
                "idalabanza": 321,
                "numhimnario": 296,
                "nombre": "Yo Quiero Alabarte",
                "alabanza": "1\nYo sólo espero ese día\nEn que Jesús me corone\nEn la patria de los justos\nDonde no hay penas ni quebrantos,\nDonde se oyen loores\nAl que con sangre nos compró.\n\nCoro\nYo quiero alabarte\nAl son de adufe y de arpa,\nCon decacordio y con flauta\nQuiero Jesús loarte,\nY que al partir de este suelo;\nPuedan en el cielo entonar\nUn gloria a Dios resonante,\nAl son de mi laúd.\n\n2\nYa tú conoces mi vida\nY vez que en ti se recrea\nQuita de mí la amargura,\nDeja tu sello en mi vida\nDeja que cante y te alabe\nHasta que en gloria yo te vea"
              }
            ]
          }';

        $jsonObject = json_decode($himnario);
        // Iterar sobre los registros
        foreach ($jsonObject->RECORDS as $record) {
            // Acceder a los datos individuales del registro
            Alabanza::create([
                'tipo_alabanza' => 0,
                'nombre' => $record->nombre,
                'numero_himnario' => $record->numhimnario,
                'slug' => Str::slug($record->nombre),
                'id_autor' => 1,
                'nota' => null,
                'estado' => 1,
                'letra' => $record->alabanza,
                'id_usuario' => 1,
                'tipo_video' => 1,
                'url_video' => null
            ]);
        }
    }
}
