<?php

namespace Database\Seeders;

use App\Models\Alabanza;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CancioneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cancionero = '{
            "RECORDS": [
              {
                "id": 1,
                "nombre": "Que Se Abran Los Cielos E",
                "alabanza": "A ti que estás pasando por momentos duros\nQuiero bendecirte\nA ti que estás llorando ahora mismo sin consuelo\nQuiero animarte\n \nY llevar esta palabra de aliento\nQue termine todos tus sufrimientos\nEn el nombre de Jesús\nAmén\n \nA ti que las dificultades ya te ahogan\nQuiero bendecirte\nY ti que estás pensando abandonarlo todo\nQuiero animarte\n \nY enviarte esta palabra de aliento\nDeclarando sobre ti tus bendiciones\nEn el nombre de Jesús\nAmén\n \nCORO\nQue se abran los cielos\nQue se llene tu vida\nQue la misericordia del Señor\nTe cubra día tras día\n \nQue se abran los cielos\nQue se llene tu vida\nQue la misma presencia del Señor\nTe cubra hoy\n \nA ti que las dificultades ya te ahogan\nQuiero bendecirte\nY a ti que estás pensando abandonarlo todo\nQuiero animarte\n \nY enviarte esta palabra de aliento\nDeclarando sobre ti tus bendiciones\nEn el nombre de Jésus\nAmén\n \nCORO X2"
              },
              {
                "id": 2,
                "nombre": "Eres Todo Poderoso Bm",
                "alabanza": "La única razón de mi adoración\nEres Tú, mi Jesús\nMi único motivo para vivir\nEres Tú, mi Señor\n \nMi única verdad está en Ti\nEres mi luz y mi salvación\nMi único amor eres Tú, Señor\nY por siempre Te alabaré\n \nCORO\n//Tú eres Todo Poderoso\nEres grande y majestuoso\nEres fuerte, invencible\nY no hay nadie\nComo tú//"
              },
              {
                "id": 3,
                "nombre": "Abre Mis Ojos Oh Cristo D",
                "alabanza": "//Abre mis ojos, oh, Cristo\nAbre mis ojos, te pido\nYo quiero verte\nYo quiero verte//\n \nCORO\n//Y contemplar tu majestad\nY el resplandor de tu gloria\nDerrama tu amor y poder\nCuando cantamos (santo, santo)//\n \n//Santo, santo, santo\nSanto, santo, santo\nSanto, santo, santo\nYo quiero verte//"
              },
              {
                "id": 4,
                "nombre": "Te Alabaré Mi Buen Jesús E",
                "alabanza": "Eres tú la única razón\nDe mi adoración oh Jesús\nEres tú la esperanza que\nAnhelé tener oh Jesús\n\nConfié en ti me has ayudado\nTu salvación me has regalado\nHoy hay gozo en mi corazón\nCon mi canto te alabaré\n \nCORO\n///Te alabaré, te glorificaré\nTe alabaré, mi buen Jesús///\n\nEres tú la única razón\nDe mi adoración oh Jesús\nEres tú la esperanza que\nAnhelé tener oh Jesús\n\nConfié en ti me has ayudado\nTu salvación me has regalado\nHoy hay gozo en mi corazón\nCon mi canto te alabaré\n \nCORO\n///Te alabaré, te glorificaré\nTe alabaré mi buen Jesús//\n\nEn todo tiempo te alabaré\nEn todo tiempo te adorare"
              },
              {
                "id": 5,
                "nombre": "No Me Soltaras A",
                "alabanza": "Aunque yo este en el valle de la muerte y dolor,\ntu amor me quita todo temor.\nY si llego a estar en el centro de la tempestad,\nno dudaré porque estas aquí.\n \nY no temeré del mal\nPues mi Dios conmigo esta\nY si Dios conmigo esta\n¿De quien temeré?\n¿De quien temeré?\n \nCORO\nNo, no, no me soltarás\nen la calma o la tormenta.\nNo, no, no me soltarás\nen lo alto en lo bajo.\nNo, no, no me soltarás\nDios tu nunca me dejarás!\n \nPuedo ver la luz que se acerca\nAl que busca de ti\nGloriosa luz cual otra no hay\nY terminarán los problemas\nY mientras llega el fin\nViviremos conociendote a ti\n \nY no temere del mal\nPues mi Dios conmigo esta\nY si Dios conmigo esta\n¿De quien temeré?\n¿De quien temeré?\n \nCORO\nNo, no, no me soltarás\nen la calma o la tormenta.\nNo, no, no me soltarás\nen lo alto en lo bajo.\nNo, no, no me soltarás\nDios tu nunca me dejarás!\n \nY puedo ver la luz que se acerca\nAl que busca de ti\nY terminaran los problemas\nY mientras llega el fin\n\nVoy a alabarte\nVoy a alabarte"
              },
              {
                "id": 6,
                "nombre": "Me Has Dado Libertad G",
                "alabanza": "Yo quiero permanecer en ti\nPues solo tu palabra me ha transformado\nSeñor Jesus tu eres la Verdad\nY esa verdad me dio libertad\nPor siempre me has dado libertad\nTe quiero adorar\nNo mas esclavo del pecado\nMe has dado libertad\n \nCORO\nMe has dado libertad\nte quiero adorar\nsoy verdaderamente libre\npor tu palabra en mi... Jesus"
              },
              {
                "id": 7,
                "nombre": "Gracia Sublime Es G",
                "alabanza": "¿Quién rompe el poder de él pecado?\nSu amor es fuerte y poderoso\nEl rey de gloria, el rey de majestad\n \nConmueve el mundo con su estruendo\nY nos asombra con maravillas\nEl rey de gloria, el rey de majestad\nCORO\nGracia sublime es\nPerfecto es tu amor\nTomaste mi lugar\nCargaste tú mi cruz\n \nTu vida diste ahí\nY ahora libre soy\nJesús te adoro\nPor lo que hiciste en mí, ¡wo-oh!\nPusiste en orden todo el caos\nNos adoptaste como tus hijos\nEl rey de gloria, el rey de majestad, ¡oh!\n \nEl que gobierna con su justicia\nY resplandece con su belleza\nEl rey de gloria, el rey de majestad, ¡wo-oh!\n \nCORO...\n \n//Digno es el Cordero de Dios\nDigno es el rey que la muerte venció//\nDigno es el Cordero de Dios\n¡Digno! ¡Digno!\n \nCORO X2..."
              },
              {
                "id": 8,
                "nombre": "Al Que Me Ciñe De Poder G",
                "alabanza": "//Al que me ciñe de poder\nAquel que mi victoria es\nSolo a El alabare\nSolo a El exaltare//\n \nCORO\n//De ti será mi alabanza\nEn la congregación\nCantare y alabare\nTu nombre Señor//"
              },
              {
                "id": 9,
                "nombre": "Ven Es Hora De Adorarle D",
                "alabanza": "Ven, es hora de adorarle\nVen, abre tu corazón a Él\nVen, ante su trono estamos\nVen, ante la majestad de Dios\n¡Ven!\n \nCORO\nToda lengua confesará que Él es Dios\nLas rodillas se doblarán\nY un tesoro eterno tendrás en Él\nSi escoges su amor\n \n¡Él es Rey! ¡Él es Rey! ¡Él es Rey!"
              },
              {
                "id": 10,
                "nombre": "Anciano De Días D",
                "alabanza": "Bendición y gloria\nPoder y honra,\nAnciano de días será\n\nToda nación y la creación\nAnciano de días se postrará\n \nCORO\nToda lengua confesará declarará tu gloria\nToda rodilla se doblará adorando,\nTu nombre exaltado será\nY tu reino anciano de días\nNo pasará\n \nREPITE ESTROFA Y CORO\n \nSobre la tierra tu reinaras\nAnciano de días caeran\nTu gran dignidad Dios es sin igual\nAnciano de días caeran"
              },
              {
                "id": 11,
                "nombre": "Grandes Son Tus Maravillas C",
                "alabanza": "//Te alabaré, oh señor\nInvocaré tu santo nombre\nSiempre daré a conocer\nEn los pueblos tus obras//\n \nCORO\n//Grandes son///\nTus maravillas\n//Grandes son///\nTus maravillas"
              },
              {
                "id": 12,
                "nombre": "Con Mi Dios Yo Saltare Los Muros Em",
                "alabanza": "//Con mi Dios, yo asaltaré los muros\nCon mi Dios, ejércitos derribaré//\n \nCORO\nÉl adiestra mis manos para la batalla\nPuedo tomar con mis manos el arco de bronce\nÉl es escudo, la roca mía\nÉl es la fuerza de mi salvación\nMi alto refugio, mi fortaleza\nÉl es mi libertador"
              },
              {
                "id": 13,
                "nombre": "Bartimeo Dm",
                "alabanza": "Estaba sentado junto al camino, mendigando,\nera Bartimeo que ciego estaba.\nCuando escuchó una multitud aclamar el nombre de Jesús,\nrápidamente se levantó y gritó a gran voz:\n \nCORO\nJesús, hijo de David, ten misericordia de mí,\nmira mi necesidad solo Tu voz quiero escuchar\ny sé que mis ojos se abrirán por Ti.\n\nLa gente quería hacer callar a Bartimeo,\npero él tanto insistió que Jesús lo escuchó,\nEl Maestro dijo: ¿Qué quieres que te haga?.\nQue recobre la vista el ciego contestó.\n \nCORO"
              },
              {
                "id": 14,
                "nombre": "Dios Es Así G",
                "alabanza": "¿Cuántas veces corriste cuando Dios te estaba llamando?\n¿Cuántas veces dijiste \"ocupado estoy\"?\nFueron los días, los meses y también los años\nPero Dios siempre esperando a que tú regresaras\n \nCORO\nEs que Dios es así, siempre ama hasta el final\nY es que Dios es así, es su forma de ser\nSiempre ama hasta el final, siempre ama hasta el final\nY es que Dios es así, yo no lo puedo entender\n \nNunca reprochó que tú le negaras\nFueron muchas las veces que tú le fallaste\nPero todos los días a ti regresaba\nDeseando cuidarte, esperando ayudarte\n \nCORO\nEs que Dios es así, siempre ama hasta el final\nY es que Dios es así, es su forma de ser\nSiempre ama hasta el final, siempre ama hasta el final\nY es que Dios es así, yo no lo puedo entender\n \nEs que Dios es así, siempre ama hasta el final\nY es que Dios es así, es su forma de ser\nSiempre ama hasta el final, siempre ama hasta el final\nEs que Dios es así, es su forma de ser"
              },
              {
                "id": 15,
                "nombre": "La Cosecha Gm",
                "alabanza": "Alza tus ojos y mira\nLa cosecha esta lista\nEl tiempo a llegado\nLa mies se esta madura\n\nEsfuérzate y se valiente\nLevántate y predica\nA todas las naciones\nQue Cristo es la vida\n \nCORO\nY sera llena la tierra de su gloria\nSe cubrirá como las aguas cubren la mar\nY sera llena la tierra de su gloria se cubrirá\nComo las aguas cubren la mar\n \nREPITE ESTROFA Y CORO\n \nNo, no hay otro nombre dado a los hombres\nJesucristo es el señor\n \nCORO X2\nY sera llena la tierra de su gloria se cubrirá\nComo las aguas cubren la mar\n \nAvivame\nCon tu espíritu\nAvivame avivame\nCon tu poder\nAvivame"
              },
              {
                "id": 16,
                "nombre": "Quiero Cantar Una Linda Canción",
                "alabanza": "Quiero cantar una linda canción\nDe aquel que mi vida cambió\nQuiero cantar una linda canción\nDe aquel que me transformó\n\nEs mi amigo Jesús\nEs mi amigo más fiel\nÉl es Dios, Él es Rey\nEs amor y verdad.\nSólo en Él encontré\nEsa paz que busqué\nSólo en Él\nEncontré la felicidad\n\nQuiero cantar una linda canción\nDe aquel que mi vida cambió\nQuiero cantar una linda canción\nDe aquel que me transformó\n\nEs mi amigo Jesús,\nEs mi amigo más fiel,\nÉl es Dios, Él es Rey\nEs amor y verdad\nSólo en Él encontré\nEsa paz que busqué\nSólo en Él\nEncontré la felicidad"
              },
              {
                "id": 18,
                "nombre": "Usa Mi Vida Señor",
                "alabanza": "Usa mi vida, Señor,\nUsa mi vida,\nYo quiero servirte con todas las fuerzas de mi corazón\n\nUsa mi vida Señor,\nUsa mi vida\nYo quiero amarte con todo el cariño de mi corazón.\n \nCORO\nAunque indigno soy, aunque nada tengo\nQue pueda ofrecerte divino Señor,\nYo quiero servirte //Con todas la fuerzas//\nDe mi corazón.\n "
              },
              {
                "id": 19,
                "nombre": "Vuelve A Llamar JAR G",
                "alabanza": "Si llamaras otra vez seria distinto\nNo como la ultima vez, ya no soy el mismo\nSi llamaras otra vez, yo te aseguro\nMi cansado corazon quiere ser tuyo\n\nAbriria sin dudar a ti la puerta\nNo te haria yo esperar …\nNo tengo fuerzas\n\nCORO\nVuelve a llamar que listo estoy,\nVuelve a tocar mi corazon\nEse jardin de intimidad,\nQue se marchita si no estas\n\nVuelve a llamar que atento estoy,\nQuiero escuchar tu dulce voz\nSera un secreto entre los dos,\nLa intimidad entre tú y yo\n\nSi buscaras otra vez mi compañia\nTu amistad seria mi pan, de cada dia\nSi llegaras otra vez hasta mi puerta,\nNo tendrias que aguardar … una respuesta\n\nSaltaria mi corazon por tu presencia\nNo te haria yo esperar,\nNo tengo fuerzas\n \nCORO X2"
              },
              {
                "id": 20,
                "nombre": "Como Podré Pagarte Señor G",
                "alabanza": "Oh Señor tu me has dado un nuevo corazón\nVida me diste una nueva vida también\nLlenaste llenaste mi vida de gozo y de paz\nPero ahora yo te canto te alabo con mi corazón\n \nCORO\n \nComo podré pagarte Señor\ncomo podré pagarte\nsi tu me has dado la vida que yo\njamas habría encontrado.\n \nLa Biblia la Biblia nos dice que tu eres Rey\nTe miro y mi corazón te siente también\nMoriste vilmente en aquella cruz por mi\nMe diste nueva vida llenaste un vació en mi ser"
              },
              {
                "id": 21,
                "nombre": "Ahora Soy Feliz Con Él E",
                "alabanza": "Viene a mi mente fatal recuerdo de aquellos dias\nCuando mi vida vagaba lejos de mi Señor\nMuchos engaños y sin sabores falsa alegria\nCuando vivia lejos de Cristo lejos de Dios\n \nCoro\nAhora soy feliz con El y no deseo regresar\nLos años que sin Dios vague no los quiero ni recordar\nYo quiero siempre serle fiel pues grande salvacion me dio\nY se que reinare con El al fin de esta dispensacion\n \nDe cuantas cosas se priva el hombre que no ha entendido\nQue nunca ha oido lo que concierne a la salvacion\nMas cuando todos al Evangelio ya hemos creido\nEntonces Cristo nos proporciona la salvacion\n \nRepetir Coro"
              },
              {
                "id": 22,
                "nombre": "Loor A Ti Mi Dios En Esta Noche G",
                "alabanza": "Loor a ti mi Dios en esta noche\nPor todas las bondades de este día\nOh guardame que tus potentes alas\nSean por siempre la defensa mía\n \nDe cuantas faltas hoy he cometido\nContigo, con el prójimo y conmigo\nPerdóname mi Dios por tu Hijo Amado\nY haz que mi sueño pueda ser tranquilo\n \nEnséñame a vivir que no me espante\nLa tumba más que el lecho del reposo\nEnséñame a morir para que pueda\nEl día del juicio despertar glorioso\nY pueda reposar en ti mi vida\nMis parpados los cierre un dulce sueño\nUn sueño en que vigor puedas prestarme\nPara servirte al despertar mi dueño\n \nEnséñame a vivir que no me espante\nLa tumba más que el lecho del reposo\nEnséñame a morir para que pueda\nEl día del juicio despertar glorioso\nY pueda reposar en ti mi vida\nMis parpados los cierre un dulce sueño\nUn sueño en que vigor puedas prestarme\nPara servirte al despertar mi dueño"
              },
              {
                "id": 23,
                "nombre": "Somos El Pueblo De Dios F",
                "alabanza": "Somos el pueblo de Dios\nSomos un pueblo especial\nLlamados para anunciar\nLas virtudes de Aquel\nQue nos llamó a su luz\n \nSomos el pueblo de Dios\nSu sangre nos redimió\nY su espiritu dio\nPara darnos poder\nY ser testigos de Él\n\nCORO\n \nY llevaremos su gloria\nA cada pueblo en nación\nTrayéndoles esperanzas\nY nuevas de salvación\nY su amor nos impulsa\nNo nos podemos callar\nAnunciaremos al mundo\nDe su amor y verdad"
              },
              {
                "id": 24,
                "nombre": "Todo se lo debo a él",
                "alabanza": "Mi despertar y mi atardecer\nTodo se lo debo a Él\nSi en mi vivir no existiera Él\nNo sé que sería de mí\nPorque todo se lo debo a Él\n\nCORO\nTodo se lo debo a Él\nTodo se lo debo a Él\nMi vida y sustento\nMi fuerza y esperanza\nTodo se lo debo a Él\n\nSi en mi aliento el no fuera el viento\n¿Cómo podría vivir?\nY si de mi corazón no fuera el centro\nHabría un vacío en mí\nY es que todo se lo debo a Él\n\nTodo se lo debo a Él\nTodo se lo debo a Él\nMi vida y sustento\nMi fuerza y esperanza\nTodo se lo debo a Él\n¡Oh!\n\nTodo se lo debo a Él\nTodo (todo se lo debo a Él)\nMi casa y mi familia\nY todas mis canciones\nTodo se lo debo a Él\n\nTodo se lo debo a Él\nTodo (todo se lo debo a Él)\nMi vida y mi sustento (mi vida y mi sustento)\nMi fuerza y esperanza\nTodo se lo debo a Él, oh-oh\nTodo se lo debo a Él\n\nTodo (todo se lo debo a Él)\nOh-oh-oh-oh-oh, oh-oh\nMi casa, mi familia\nY todas mis canciones\nTodo se lo debo a Él"
              },
              {
                "id": 25,
                "nombre": "Tomando de la fuente",
                "alabanza": "Tomando de la fuente, tomando de la fuente,\nestoy tomando de la fuente que no cesará.\nBebiendo agua viva, provista por el padre,\ntomando de la fuente que no cesará.\n\nEsa fuente de que estoy hablando,\nvida eterna de ella está brotando.\nQue lava todas tus penas y dolor.\nEstoy parado en la corriente que atraviesa toda mi alma.\nY salpica para vida eterna en mi ser.\n\n¡Oh!, ¡como llena mi ser!\nEstoy seguro que nunca jamás, tendré sed.\n¡Oh!, ¡como llena mi vida!\nCon ese gozo que yo sentí cuando lo conocí."
              },
              {
                "id": 26,
                "nombre": "Hombres de valor",
                "alabanza": "¿Quién irá abriendo caminos,\nforjando mejores destinos\ncon pautas de amor\npara la humanidad?\n\n¿Quién dirá: asumo ese reto,\nme entrego completo\ny me uno a la causa de Dios\nque cambia el corazón?\n\n¿Quién irá a esos hombres tan desesperados?\n¿Quién irá a esos matrimonios acabados,\no ese niño que esta solo sin hogar\nesperando que alguien le hable?\n\nCoro:\nHombres de valor,\nnecesita Dios,\nhombres de valor esforzados.\n\nHombres de valor\nque cumplan promesas,\nque sigan la ruta trazada\ncon la mirada en su Salvador.\n\nVerso 2:\nHeme aquí Señor,\nrindo mis derechos,\nhoy vengo dispuesto a trazar\npautas de amor para la humanidad.\n\nHoy aquí (hoy aquí)\nasumo eso reto (asumo eso reto)\ny me entrego completo,\ny me uno ala causa de Dios\nque cambia el corazón.\n\n(Coro x3)\n\nFinal:\nHombres entregados,\nfieles al llamado,\ntodo por la causa del Señor."
              },
              {
                "id": 27,
                "nombre": "La bendición",
                "alabanza": "VERSO 1\nDios te guarde\nY bendiga\nHaz que su rostro brille sobre ti\nY te muestre favor\nDios te mire con agrado\nY te de paz\n\nCoro\nAmén\n\nPUENTE 1\nQue te cubra con Su gracia\nHasta mil generaciones\nTu familia\nY tus hijos\nY los hijos\nY los hijos\n\nPUENTE 2\nSu presencia te acompane\nDondequiera que tu vayas\nTe rodee\nQue te llene\nVa contigo.\nVa contigo.\n\nBRIDGE 3\nDe mañana  y de noche\nEn tu entrada y salida\nEn tu llanto\nY alegria\nÉl te ama\nÉl te ama"
              },
              {
                "id": 28,
                "nombre": "Juventud levanta el vuelo F",
                "alabanza": "Joven de hoy\nJesús te llama\nrespóndele, el tiempo es corto...\ny no hay mañana\nacuérdate\nde tu creador\nentrégale tu juventud\ny tu vigor.\nCon fé y valor\nrompe el silencio\npredicale al mundo las buenas nuevas\ndel evangelio.\n\nCORO:\n\nJuventud,\nlevanta el vuelo\ntoma la espada del Espíritu\nque es la palabra de Dios.\nJuventud\nlevanta el vuelo\ntoma el escudo de la fé\ny la armadura de Dios.\npues nuestra lucha no es contra sangra, ni carne.\npues nuestra lucha no es contra sangre, ni carne.\n\nEstrofa: 2\n\nJoven de hoy\napártate del mal\nla mocedad y la juventud...\nson vanidad.\nCon fé y valor\nrompe el silencio\npredicale al mundo las buenas nuevas\ndel evangelio.\n\n\nCoro (bis x2)"
              },
              {
                "id": 29,
                "nombre": "Dios cuida de mi",
                "alabanza": "Necesito aprender un poco aqui\nnecesito aprender un poco alli\nnecesito aprender mas de Dios\npor que el es quien cuida de mi\n\nSi una puerta se cierra aqui\notras puertas se abren alli\nnecesito aprender mas de Dios\npor que el es quien cuida de mi\nDios cuida de mi.\n\nCoro:\n//Dios cuida de mi\nbajo las sombras de sus alas\nDios cuida de mi\nyo amo su casa\ny no ando solo\nyo no es toy solo por que\nDios cuida de mi.//\n\nEn mi vida no hay direccion\ntomare una decision\nyo se que existe alguien que me ama\nmi mano el sostendra\n\nSi una pueerta se cierra aqui\notras puertas se abren alli\nnecesito aprender mas de Dios\npor que el es quien cuida de mi\nDios cuida de mi\n\nCoro:\n//Dios cuida de mi\nbajo las sombras de sus alas\nDios cuida de mi\nyo amo su casa\ny no ando solo\nyo no estoy solo por que\nDios cuida de mi//"
              },
              {
                "id": 30,
                "nombre": "Solo Dios puede salvar",
                "alabanza": "Todos necesitan\namor que nunca falla\ntu gracia y compasión.\n\nTodos necesitan\nperdón y esperanza\nY un Dios que salva.\n\nCORO:\nCristo puede mover montes\n¡Sólo Dios puede salvar,\nmi Dios puede salvar!\nPor siempre, autor de salvación\nJesús la muerte venció,\nÉl la muerte venció\n\nAun con mis temores\nsé que me aceptas\nLléname otra vez.\n\nMi vida entera ofrezco\npara seguir tus pasos\nA Tí me rindo.\n\n(REPETIR CORO x2)\n\nEn la tierra,\nTu luz brillará\nCantamos por la gloria\nde Tu majestad, Jesús (x2)\n\n(REPETIR CORO x2)\n\nEn la tierra,\nTu luz brillará\nCantamos por la gloria\nde Tu majestad, Jesús (x6)"
              },
              {
                "id": 32,
                "nombre": "Al taller del maestro",
                "alabanza": "Ay como me duele estar despierto y no poder cantar\nComo expresarte sin palabras que muero si no estas\nQue el tiempo pasa y todo cambia; hoy lloro de soledad\nQue el sueño que llevo en el alma de repente ya no esta\nQue la sonrisa se ha marchado; mis lágrimas caerán\n\nAl taller del maestro vengo pues El me curara\nMe tomara entre sus brazos y cada herida sanara\nLas herramientas del maestro mi alma El remendara\nMartillo en mano y mucho fuego aunque me duela ayudara\nA conocerlo y a entenderlo a saber que nada merezco\nAmar es mas que un pretexto es una entrega es un negar\nMas que aquel sentimiento es la decisión de amar\n\nAl taller del maestro vengo\nAllí el sol se pondrá\nAl taller del maestro vengo\nCarpintero mi alma aquí esta\nAl taller del maestro vengo\nNo importa el tiempo que allí he de estar\n\nAy de aquellos días que hizo frío el sol no apareció\nCuando el talento no lo es todo\nY el silencio vale más que mil palabras sin sentido\nY una vida morirá si Tu no estas aquí conmigo\nDe que sirve mi cantar?\nPara que la fama y las estrellas si el maestro allí no esta?\nPara que decirte que te amo si conmigo no quiero estar?"
              },
              {
                "id": 33,
                "nombre": "Por tu gracia",
                "alabanza": "No me gloriare, de nada que haya en mí\nQue sería yo, si no fuera por ti\nNada hice yo, por buscarte a ti\nGrande es señor, tu amor por mí\n\nCOR0\nPor tu gracia soy, lo que soy\nSolo por tu bondad\nY tu poder, en mi debilidad\n\nNo me gloriare, de nada que haya en mí\nQue sería yo, si no fuera por ti\nNada hice yo, por buscarte a ti\nGrande es señor, tu amor por mí\n\nC·O·R·O\nPor tu gracia soy, lo que soy\nSolo por tu bondad\nY tu poder, en mi debilidad\n\nRepite"
              },
              {
                "id": 34,
                "nombre": "Soplando vida",
                "alabanza": "Quiero vivir allá en una casa en las montañas\nCerquita del cielo cerquita de dios\nQuiero vivir allá donde el aire es pura y sano\nDonde puedo respirar el mismo sol\nPero todavía no, no\n\nQuiero vivir allá donde el rio es abundante\nCerquita del cielo cerquita de dios\nQuiero vivir allá donde un día se llevarme\nDonde puedo respirar el mismo sol\nPero todavía no, no\n\nCORO\nY aquí estoy en este valle de huesos estoy\nSoplando vida y aliento aquí estoy\nEn este valle tan desierto\nTan sediento de tu amor\nAquí estoy\n\nQuiero vivir allá donde siempre es primavera\nCerquita del cielo cerquita de dios\nQuiero vivir allá donde canta la mañana\nDonde hay árboles que danzan con el sol\nPero todavía no, no\n\nCORO\nY aquí estoy en este valle de huesos estoy\nSoplando vida y aliento aquí estoy\nEn este valle tan desierto\nTan sediento de tu amor\nAquí estoy"
              },
              {
                "id": 35,
                "nombre": "Mi pasión",
                "alabanza": "Nadie hay como tu eres dulce refugio\nA mi ser eres luz andare en tus caminos\nTe necesito a mi lado por siempre\nTu eres todo en mi.\n\nCoro\nMi pasion es estar junto a ti\nOh precioso Jesus\nY sentir como llenas mi vida\nde consuelo y aliento\n\nNadie hay como tu eres dulce refugio\nA mi ser eres luz andare en tus caminos\nTe necesito a mi lado por siempre\nTu eres todo en mi.\n\nCoro\nMi pasion es estar junto a ti\nOh precioso Jesus\nY sentir como llenas mi vida\nde consuelo y aliento\n\nNo temere porque conmigo estas\nNo lo puedo negar\nEstoy seguro que me sostendras\nSi vivo es por ti\n\nCoro"
              },
              {
                "id": 36,
                "nombre": "Porque te alejas",
                "alabanza": "Por que te alejas de tu señor, \nsi el solo quiere hacerte feliz, \nporque no quieres que viva en ti, \npiensa lo triste que ha de sentirse el señor, \npiensa lo triste. \n\nCuando buscandote siempre esta, \ncuando no quieres oir su voz, \ncuando lo apartas del corazon, \npiensa lo triste que ha de sentirse el señor, \npiensa lo triste. \n\nCuando en pecado tu vida esta, \ncuando en la trampa del mal ya estas, \ncuando enlazado al mundo vas, \npiensa lo triste que ha de sentirse el señor, \npiensa lo triste. \n\nCuando en pecado tu vida esta, \ncuando en la trampa del mal ya estas, \ncuando enlazado al mundo vas, \npiensa lo triste que ha de sentirse el señor, \npiensa lo triste que ha de sentirse el señor, \nregresa a Dios.\n"
              },
              {
                "id": 37,
                "nombre": "Mi barquilla",
                "alabanza": "Mi barquilla sin Jesús\nya iba naufragar\nmi nauta no podía navegar\ntoda mi ilusión se hundía en el mar\nmis sueños eran solo arribar\n\nel anchuroso mar agitaba mi bajel\nlas velas destruidas por el viento\nde repente una visión\nestremeció mi corazón\nvisible vi a Jesús.\n\nel infierno se cerró\nmi barquilla se salvó\nal ver la visión de Jesús\na su barca me llevo\nde mi mano me tomo\ncon él feliz navegare\n\npor momentos yo sentía desfallecer\nlas olas afligían a mi ser\nel infierno se abría\ny me barca se hundía,\n¡entonces yo clame!\n\nel infierno se cerró\nmi barquilla se salvo\nal ver la visión de Jesús\na su barca el me llevó\nde mi mano me tomó\ncon el feliz navegare.\n\nel infierno se cerró\nmi barquilla se salvo\nal ver la visión de Jesús.\na su barca él me llevo\nde mi mano me tomo\ncon el feliz navegare\n\n¡a la playa llegaré al amanecer!"
              },
              {
                "id": 39,
                "nombre": "Quiero gritarlo",
                "alabanza": "En ti yo encuentro\nun gran amor\nregalo perfecto\nsin condición\npor todas partes lo puedo sentir\nenamorado estoy\nde ti es mi corazón\n\nCORO\nquiero gritarlo\nquiero anunciarlo\nquiero decirle al mundo que eres lo mejor\nque ya no existe nada fuera\nde tu perfecto amor"
              },
              {
                "id": 40,
                "nombre": "Sobrenatural",
                "alabanza": "Sobrenatural eres Dios sin igual\ndueño del cielo y mar, sobrenatural\nSobrenatural habitas la eternidad\nEres es el manantial, sobrenatural\n\nCoro:\nDios de mi vida eres Dios, de los cielos eres Dios,\nde los mares eres Dios, sobrenatural\nDe la tierra eres Dios, mi sustento eres Dios\nsiempre eterno eres Dios, sobrenatural\n\nSobrenatural, eres Dios sin igual\ndueño del cielo y mar, sobrenatural\nsobrenatural, sobrenatural, sobrenaturaaaaaaaal\n"
              },
              {
                "id": 41,
                "nombre": "Mi libertador",
                "alabanza": "Aquí estoy quieto, en el secreto\nMientras Dios hace su obra en mí\nAquí permanezco, adorando al maestro\nSu firme amor nunca termina\n\nAunque no pueda ver, ni logre entender\nSu mano nunca me soltará\nMientras levanto esta canción Dios obra a mi favor\nSu presencia se mueve aquí\n\nCORO\nMi libertador, Dios mi protector\nEs quien me defiende y pelea por mí\nSu nombre es Vencedor, mi padre el gran Dios hoy\nÉl me amó primero, tomó mi lugar\n\nAquí estoy quieto, en el secreto\nMientras Dios hace su obra en mí\nAquí permanezco, adorando al maestro\nSu firme amor nunca termina\n\nAunque no pueda ver, ni logre entender\nSu mano nunca me soltará\nMientras levanto esta canción Dios obra a mi favor\nSu presencia se mueve aquí\n\nCORO\n\nAbre hoy camino donde no lo hay\nEn la tormenta me hace descansar\nGigantes cayeron, Dios los derribó\nÉl es mi salvador, mi libertador\n\nAbre hoy camino donde no lo hay\nEn la tormenta me hace descansar\nGigantes cayeron, Dios los derribó\nÉl es mi salvador, mi libertador\n\nMi libertador, Dios mi protector\nEs quien me defiende y pelea por mí\nSu nombre es Vencedor, mi padre el gran Dios hoy\nÉl me amó primero, tomó mi lugar\nTomó mi lugar, tomó mi lugar\n\nAleluya, aleluya\nAleluya, mi libertador\nAleluya, aleluya\nAleluya, mi libertador\n\nAleluya, aleluya\nAleluya, mi libertador\nAleluya, aleluya\nAleluya, mi libertador\n"
              },
              {
                "id": 42,
                "nombre": "Señor eres fiel",
                "alabanza": "Señor eres fiel y tu misericordia eterna\nSeñor eres fiel y tu misericordia eterna\n\nGente de toda lengua y nación\nDe generación, a generación\n\nTe adoramos hoy, aleluya, aleluya\nAdoramos hoy, eres Señor, ¡yei!\nTe adoramos hoy, aleluya, aleluya\nAdoramos hoy, eres fiel "
              }
            ]
          }';

        $jsonObject = json_decode($cancionero);
        // Iterar sobre los registros
        foreach ($jsonObject->RECORDS as $record) {
            // Acceder a los datos individuales del registro
            Alabanza::create([
                'tipo_alabanza' => 1,
                'nombre' => $record->nombre,
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
