<?php

namespace Database\Seeders;

use App\Models\Coro;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CorosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $coros = '{
            "RECORDS": [
                {
                    "idcoro": 7,
                    "nombre": "Venceré",
                    "coro": "<div>//Vencer&eacute; porque el esta conmigo</div> <div>Vencer&eacute; porque el conmigo esta,</div> <div>Vencer&eacute;, vencer&eacute;, vencer&aacute;s, vencer&aacute;s</div> <div>Venceremos en el nombre de Jes&uacute;s.//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 8,
                    "nombre": "El culto de hoy",
                    "coro": "<div>// El culto de hoy va ser maravilloso</div> <div>porque el Se&ntilde;or va a derramar de su poder. //</div> <div>// Derrama Se&ntilde;or. //</div> <div>Derrama sobre nosotros tu poder.</div> <div>// Derrama Se&ntilde;or. //</div> <div>Derrama sobre nosotros tu poder.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 9,
                    "nombre": "Hay una fiesta",
                    "coro": "<div>Hay una fiesta, fiesta, fiesta</div> <div>// constantemente en mi. //</div> <div>Hay una fiesta, fiesta,</div> <div>fiesta Desde que a Cristo yo conoc&iacute;.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 10,
                    "nombre": "Yo no me quiero quedar",
                    "coro": "<div>// Yo no me quiero quedar</div> <div>el d&iacute;a que Cristo venga. //</div> <div>//Yo no me quiero quedar,</div> <div>no me quiero quedar</div> <div>Quiero irme con El//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 11,
                    "nombre": "Cristo pronto viene",
                    "coro": "<div>/// Cristo pronto viene</div> <div>para llevarnos al cielo. ///</div> <div>// Cristo pronto viene</div> <div>para llevarnos al cielo. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 12,
                    "nombre": "No hay Dios tan grande como tú",
                    "coro": "<div>// No hay Dios tan grande como t&uacute;</div> <div>No lo hay, no lo hay. //</div> <div>// No hay Dios que pueda hacer las obras,</div> <div>Como las que haces t&uacute;. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 14,
                    "nombre": "Dios está aquí (G)",
                    "coro": "// Dios está aquí\nTan cierto como el aire que respiro,\nTan cierto como en la mañana se levanta el sol\nTan cierto que cuando le hablo, el me puede oír //\n\nLe puedes sentir, a tu lado en este mismo instante\nLe puedes sentir muy dentro de tu corazón\nLe puedes sentir en ese problema que tienes\nJesus esta aqui, si tu quieres le puedes sentir.",
                    "tipo": 2
                },
                {
                    "idcoro": 15,
                    "nombre": "Santo, santo, santo (G)",
                    "coro": "Santo, santo, santo\nMi corazon te adora\nMi corazón solo sabe decir\nSanto eres tú",
                    "tipo": 2
                },
                {
                    "idcoro": 16,
                    "nombre": "Tu fidelidad (G)",
                    "coro": "// Tu fidelidad es grande\nTu fidelidad incomparable es\nNadie es cómo tú, bendito Dios\nGrande es tu fidelidad //",
                    "tipo": 2
                },
                {
                    "idcoro": 20,
                    "nombre": "Temprano yo te buscaré (G)",
                    "coro": "Temprano yo te buscaré\nDe madrugada yo me acercaré a Ti\nMi alma te anhela y tiene sed\nPara ver tu Gloria y tu Poder\n\nMi socorro has sido Tú\nY en la sombra de tus alas\nYo me gozaré\nMi alma está apegada a Ti\nPor que tu diestra me ha sostenido\nOh, tu diestra me ha sostenido",
                    "tipo": 2
                },
                {
                    "idcoro": 23,
                    "nombre": "Te pido la paz (G)",
                    "coro": "Ayúdame a mirar con tus ojos\nYo quiero sentir con tu corazón\nNo quiero vivir más siendo insensible\nHay tanta necesidad oh Jesucristo\n\nTe pido la paz\nPara mi ciudad\nTe pido perdón\nPor mi ciudad\nAhora me humillo\nY busco tu rostro\nA quien iré señor si no a ti",
                    "tipo": 2
                },
                {
                    "idcoro": 24,
                    "nombre": "Pues si vivimos",
                    "coro": "Pues si vivimos, para el vivimos\ny si morimos, para el morimos\n\n// Sea que vivamos, o que muramos\nSomos del señor, somos del señor //",
                    "tipo": 2
                },
                {
                    "idcoro": 25,
                    "nombre": "Él es mi paz",
                    "coro": "// Él es mi paz\nHa quebrado todas mis cadenas\nÉl es mi paz, él es mu paz //\n\n// Hecho toda mi ansiedad sobre el,\nÉl cuidará de mi\nEl es mi paz, el es mi paz //",
                    "tipo": 2
                },
                {
                    "idcoro": 26,
                    "nombre": "En ésta reunión Cristo está",
                    "coro": "<div>En esta reuni&oacute;n Cristo est&aacute;,</div> <div>pues el ha prometido estar</div> <div>Donde dos o tres, en su nombre est&eacute;</div> <div>Alli esta &eacute;l, alli est&aacute; &eacute;l, alli est&aacute; el</div> <div>// Yo lo siento en mi,</div> <div>yo lo siento en mi</div> <div>Y su esp&iacute;ritu me hace cantar //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 27,
                    "nombre": "Estamos hoy de fiesta",
                    "coro": "<div>Estamos hoy de fiesta,</div> <div>goc&eacute;monos hermanos</div> <div>Dejemos las tristezas</div> <div>y alcemos nuestras manos</div> <div>//Olvidando los rencores</div> <div>todos en amistad</div> <div>es dia de regocijo</div> <div>es dia de libertad//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 28,
                    "nombre": "Jehová tu eres mi Dios",
                    "coro": "<div>//Jehov&aacute; tu eres mi Dios,</div> <div>y alabar&eacute; y exaltare tu nombre//</div> <div>//Porque has hecho maravillas</div> <div>yo alabar&eacute; y exaltare tu nombre//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 29,
                    "nombre": "Yo sigo a mi Jesús",
                    "coro": "<div>Yo sigo a mi Jes&uacute;s y en gloria le ver&eacute;</div> <div>yo sigo, yo sigo, yo sigo a mi Jes&uacute;s</div> <div>Si el mundo no le sigue</div> <div>por no llevar su cruz,</div> <div>yo sigo, yo sigo, yo sigo a mi Jes&uacute;s</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 30,
                    "nombre": "Ya no hay tristeza",
                    "coro": "<div>//Que alegres los creyentes,</div> <div>que alegre los creyentes</div> <div>que alegren los creyentes</div> <div>que alaban al Se&ntilde;or//</div> <div>&nbsp;</div> <div>//Ya no hay tristeza,</div> <div>ya no hay dolor,</div> <div>para los creyentes</div> <div>que alaban al se&ntilde;or//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 31,
                    "nombre": "Mi corazón contento está",
                    "coro": "<div>//Mi coraz&oacute;n contento est&aacute;//</div> <div>porque Jes&uacute;s ya me salv&oacute;</div> <div>&nbsp;</div> <div>//Oh que feliz, oh que feliz</div> <div>se siente mi alma con Jes&uacute;s</div> <div>por la paz que ningun otro puede dar//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 32,
                    "nombre": "Ya no me siento solo",
                    "coro": "<div>Ya no me siento solo, solo, solo</div> <div>Ya no me siento solo, solo, solo</div> <div>&nbsp;</div> <div>//Porq conmigo est&aacute;</div> <div>Cristo mi salvador</div> <div>que vive en mi interior</div> <div>y me defender&aacute;//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 33,
                    "nombre": "Solamente en Cristo",
                    "coro": "<div>Solamente en Cristo,</div> <div>solamente en &eacute;l</div> <div>la salvaci&oacute;n se encuentra en &eacute;l</div> <div>No hay otro nombre,</div> <div>dado a los hombres</div> <div>solamente en Cristo,</div> <div>solamente en &eacute;l</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 34,
                    "nombre": "Alguien está aquí",
                    "coro": "<div>Alguien esta aqu&iacute; y yo se que es Cristo,</div> <div>alguien esta aqu&iacute; y yo se que es el Se&ntilde;or,</div> <div>me puede bautizar y yo se que es Cristo,</div> <div>me puede bautizar y yo se que es el Se&ntilde;or</div> <div>&nbsp;</div> <div>Yo siento en mi ser a un Cristo de poder,</div> <div>yo siento en mi ser al Espiritu Santo,</div> <div>yo siento en mi ser que &Aacute;ngeles del cielo,</div> <div>acampan a mi lado y me ayudan a vencer //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 35,
                    "nombre": "El espíritu de Dios se mueve",
                    "coro": "<div>Si el Esp&iacute;ritu de Dios se mueve</div> <div>//se mueve//</div> <div>Si el Esp&iacute;ritu de Dios se mueve</div> <div>dentro de mi coraz&oacute;n</div> <div>&nbsp;</div> <div>Oh, oh hermano deja que se mueva,</div> <div>//se mueva//</div> <div>Oh, oh hermano deja que se mueva</div> <div>Dentro de t&uacute; coraz&oacute;n.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 36,
                    "nombre": "Jesús está aquí",
                    "coro": "<div>//Jes&uacute;s esta aqu&iacute; pide lo que quieras//</div> <div>El tiene el poder el te lo dar&aacute;,</div> <div>Jes&uacute;s esta aqu&iacute; Aleluya pide lo que quieras,</div> <div>&nbsp;</div> <div>Todos nosotros por la f&eacute;</div> <div>nos acercamos Cristo a ti,</div> <div>aunque tu rostro no se v&eacute;</div> <div>Pero sabemos que esta aqu&iacute;//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 37,
                    "nombre": "Yo soy testigo del poder de Dios",
                    "coro": "<div>Yo soy testigo del poder de Dios</div> <div>por los milagros que &Eacute;l ha hecho en mí</div> <div>yo era ciego y ahora veo&nbsp;</div> <div>la luz gloriosa que nos dio Jes&uacute;s</div> <div>&nbsp;</div> <div>//Nunca, nunca, nunca me ha dejado</div> <div>nunca, nunca, me ha desamparado</div> <div>en la noche oscura,</div> <div>ó en el d&iacute;a de prueba</div> <div>Jesucristo nunca me desamparará.//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 38,
                    "nombre": "Donde está el espíritu de Dios",
                    "coro": "<div>Donde esta el espiritu de dios</div> <div>hay libertad hay libertad</div> <div>donde esta el espiritu de dios</div> <div>ahi siempre hay libertad libertad,</div> <div>&nbsp;</div> <div>libertad, libertad, libertad..</div> <div>donde esta el epiritu de Dios</div> <div>ahi siempre hay libertad.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 39,
                    "nombre": "En esta iglesia la gloria es para él",
                    "coro": "<div>En esta iglesia la gloria es para &Eacute;l,</div> <div>//es para &Eacute;l//</div> <div>En esta iglesia la gloria es para &Eacute;l,</div> <div>ahora y por la eternidad</div> <div>&nbsp;</div> <div>es para &Eacute;l,</div> <div>///es para &Eacute;l///</div> <div>En esta iglesia la gloria es para &Eacute;l,</div> <div>ahora y por la eternidad</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 40,
                    "nombre": "Jacob luchó con un ángel",
                    "coro": "<div>//Jacob luchó con un &aacute;ngel por una bendici&oacute;n//</div> <div>//d&aacute;mela Se&ntilde;or por tu gran poder//</div> <div>//yo la vine a buscar y sin ella no me voy//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 41,
                    "nombre": "Manda la promesa",
                    "coro": "<div>//Manda la promesa, m&aacute;ndala Se&ntilde;or,</div> <div>El fuego glorioso del pentecost&eacute;s//</div> <div>//Y de tu Santo Esp&iacute;ritu//</div> <div>Manda Se&ntilde;or de tu gran poder.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 42,
                    "nombre": "Conozco a un hombre de poder",
                    "coro": "<div>//Conozco a un hombre de poder</div> <div>a un hombre de poder</div> <div>a un hombre de poder//</div> <div>&nbsp;</div> <div>//Es fuerte más que el viento</div> <div>su gloria es más que el mar</div> <div>nunca me deja de amar</div> <div>en El puedo yo confiar.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 43,
                    "nombre": "Jesús yo te amo",
                    "coro": "<div>//Jes&uacute;s yo te amo//</div> <div>Jes&uacute;s yo te amo a Ti</div> <div>&nbsp;</div> <div>Por que tu me has salvado</div> <div>Por que tu me has sanado</div> <div>Jes&uacute;s yo te amo a Ti.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 44,
                    "nombre": "Yo se que Cristo viene",
                    "coro": "<div>// Yo s&eacute; que Cristo viene,</div> <div>y espero su venida. //</div> <div>&nbsp;</div> <div>// y el que est&aacute; preparado</div> <div>con El se ira para arriba. //</div> <div>//Para arriba, para arriba,</div> <div>para arriba y no para bajo</div> <div>subiendo, subiendo,</div> <div>subiendo y no bajando. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 45,
                    "nombre": "Estamos de fiesta con Jesús",
                    "coro": "<div>Estamos de fiesta con Jes&uacute;s,</div> <div>al cielo queremos ir</div> <div>Y todos reunidos en la fiesta,</div> <div>es Cristo el que va a servir.</div> <div>&nbsp;</div> <div>//Poderoso es nuestro Dios,</div> <div>poderoso es nuestro Dios//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 46,
                    "nombre": "Es Jesús el lirio de los valles",
                    "coro": "<div>Es Jes&uacute;s el lirio de los valles,</div> <div>es Jes&uacute;s la rosa de Sar&oacute;n</div> <div>como el lirio entre los espinos</div> <div>as&iacute; es su amor contigo pecador,</div> <div>//nosotros le alabamos con c&aacute;nticos celeste</div> <div>y les invitamos que vengan a cantar.//</div> <div>&nbsp;</div> <div>Es la voz que clama en el desierto</div> <div>aparejad el camino del Se&ntilde;or,</div> <div>y tambi&eacute;n endereza sus veredas</div> <div>predicaba San Juan en el desierto,</div> <div>//y les bautizaba para arrepentimiento</div> <div>para remisi&oacute;n de todos sus pecados.//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 47,
                    "nombre": "Este es el Cristo que yo predico",
                    "coro": "<div>Este es el Cristo que yo predico,</div> <div>y no me canso de predicar.</div> <div>El sana a los enfermos</div> <div>hecha fuera demonios,</div> <div>calma los vientos y la tempestad.</div> <div>&nbsp;</div> <div>Y yo le alabare, y yo le alabare,</div> <div>Y yo le alabare,</div> <div>Diciendo gloria a Dios.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 48,
                    "nombre": "Mis pecados son borrados ya",
                    "coro": "<div>Mis pecados son borrados ya</div> <div>Mis pecados son borrados ya</div> <div>Mi Jes&uacute;s los sepult&oacute;</div> <div>en la m&aacute;s profunda mar</div> <div>Mis pecados son borrados ya</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 49,
                    "nombre": "Cuando los santos marchen ya",
                    "coro": "<div>Cuando los santos marchen ya</div> <div>hacia la patria celestial</div> <div>Se&ntilde;or yo quiero estar alla</div> <div>cuando los santos marchen ya.</div> <div>&nbsp;</div> <div>//Cuando a Cristo aclamen rey//</div> <div>Se&ntilde;or yo quiero estar all&aacute;</div> <div>cuando a Cristo aclamen rey.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 50,
                    "nombre": "El señor la victoria ha dado ya",
                    "coro": "<div>//El Se&ntilde;or la victoria ha dado y&aacute;//</div> <div>Si yo espero en &Eacute;l, mis batallas pelear&aacute;.</div> <div>El Se&ntilde;or la victoria ha dado y&aacute;//</div> <div>&nbsp;</div> <div>Ellos conf&iacute;an en carros</div> <div>aquellos en caballos</div> <div>Nosotros en Jehov&aacute; tenemos memoria.</div> <div>Ellos flaquean y caen,</div> <div>nosotros nos levantamos,</div> <div>Nos levantamos y estamos en pie.//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 51,
                    "nombre": "Hay vida",
                    "coro": "<div>//Hay vida, hay vida en Jes&uacute;s</div> <div>Hay vida, hay vida en Jes&uacute;s</div> <div>Yo voy a morar a la patria celestial,</div> <div>Porque hay vida hay vida en Jes&uacute;s.</div> <div>&nbsp;</div> <div>Hay gozo, hay gozo en Jes&uacute;s</div> <div>Hay gozo, hay gozo en Jes&uacute;s</div> <div>Yo voy a morar a la patria celestial,</div> <div>Porque hay, gozo hay gozo en Jes&uacute;s.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 52,
                    "nombre": "Tu misericordia",
                    "coro": "<div>//Tu misericordia es mejor que la vida//</div> <div>Mis labios te alabar&aacute;n,</div> <div>as&iacute; mi vida te bendecir&aacute;</div> <div>En tu nombre mis manos alzar&eacute;</div> <div>&nbsp;</div> <div>//Alzar&eacute; mis manos</div> <div>en tu nombre Se&ntilde;or//</div> <div>Mis labios te alabar&aacute;n</div> <div>y as&iacute; mi vida te bendecir&aacute;</div> <div>En tu nombre mis manos alzar&eacute;.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 53,
                    "nombre": "Tu eres el alfarero",
                    "coro": "<div>Tu eres el alfarero</div> <div>que con tus manos me has transformado</div> <div>// Y mientras pasan los d&iacute;as</div> <div>pasan los a&ntilde;os m&aacute;s te venero//</div> <div>Quiebra mi c&aacute;ntaro,</div> <div>rompe mi copa,</div> <div>llena mi vida y hazla de nuevo //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 54,
                    "nombre": "Si en verdad eres salvo di amén",
                    "coro": "<div>Si en verdad eres salvo di&hellip; (Am&eacute;n) &hellip;Am&eacute;n!</div> <div>Si en verdad eres salvo di&hellip; (Am&eacute;n) &hellip;Am&eacute;n!</div> <div>Si en verdad eres salvo testifica con tu vida</div> <div>Si en verdad eres salvo di&hellip; (Am&eacute;n) &hellip;Am&eacute;n!</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 55,
                    "nombre": "Ven espíritu divino",
                    "coro": "<div>//Ven, ven, ven, esp&iacute;ritu divino</div> <div>ven, ven, ven, ac&eacute;rcate a m&iacute;.//</div> <div>&nbsp;</div> <div>//Apod&eacute;rate, apod&eacute;rate,</div> <div>apod&eacute;rate de todo mi ser.//</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 56,
                    "nombre": "Resplandece (C)",
                    "coro": "<div>Resplandece pues ha venido tu luz</div> <div>Resplandece pues ha venido tu luz</div> <div>&nbsp;</div> <div>La gloria de Jehov&aacute; ha nacido</div> <div>La gloria de Jehov&aacute; est&aacute; aqu&iacute;</div> <div>La gloria de Jehov&aacute; ha venido sobre ti</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 57,
                    "nombre": "Mira cual amor nos ha dado el padre",
                    "coro": "<div>// Mira cual amor nos ha dado el Padre,</div> <div>que seamos hechos los hijos de Dios. //</div> <div>// Por eso el mundo ya no nos conoce,</div> <div>porque a El tampoco no le conoci&oacute;. //</div> <div>&nbsp;</div> <div>// Mira pecador s&iacute; no te arrepientes</div> <div>de seguro al cielo no podr&aacute;s entrar. //</div> <div>// Porque el se&ntilde;or ha dicho en su palabra,</div> <div>alma que pecare esa morir&aacute;. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 58,
                    "nombre": "El amor de Dios es maravilloso",
                    "coro": "<div>// El amor de Dios es maravilloso. ///</div> <div>Cuan grande es el amor de Dios.</div> <div>&nbsp;</div> <div>Es tan ancho que no puedo estar afuera de El,</div> <div>es tan alto que no puedo estar arriba de El,</div> <div>tan profundo que no puedo estar abajo de El,</div> <div>tan grande es el amor de Dios.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 59,
                    "nombre": "Allá en el monte Horeb",
                    "coro": "<div>// All&aacute; en el monte Horeb la zarza ard&iacute;a. //</div> <div>Mois&eacute;s quer&iacute;a saber porque la zarza ard&iacute;a,</div> <div>y no se consum&iacute;a, quer&iacute;a saber//</div> <div>&nbsp;</div> <div>// Del cielo oy&oacute; una voz, que le dec&iacute;a //</div> <div>// Quita, quita, quita las sandalias de tus pies,</div> <div>porque el lugar donde andas Santo es. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 60,
                    "nombre": "La gloria de Jehová",
                    "coro": "<div>La gloria de Jehov&aacute; cay&oacute; en el Sina&iacute;,</div> <div>y aquel monte temblaba,</div> <div>porque Dios estaba all&iacute;.</div> <div>// Dios estaba all&iacute; //</div> <div>Y aquel monte temblaba,</div> <div>porque Dios estaba all&iacute;. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 61,
                    "nombre": "Mi alma volará",
                    "coro": "<div>// Mi alma volar&aacute;!</div> <div>al son de la trompeta,</div> <div>mi alma volar&aacute; //</div> <div>&nbsp;</div> <div>// Jes&uacute;s viene en las nubes</div> <div>a su Iglesia levantar,</div> <div>y el que no se prepare aqu&iacute; se quedara. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 62,
                    "nombre": "Viene ya",
                    "coro": "<div>// Viene y&aacute;. //</div> <div>Mi Jes&uacute;s viene y&aacute;, Viene y&aacute;.</div> <div>Por su pueblo que le ama en verdad,</div> <div>en las nubes mi Jes&uacute;s viene ya.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 63,
                    "nombre": "Ven a la luz",
                    "coro": "<div>// Ven a la luz que te da Jes&uacute;s,</div> <div>ven a la luz que te da Jes&uacute;s;</div> <div>y vivir&aacute;s all&aacute; con El</div> <div>y para siempre tu no morir&aacute;s. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 64,
                    "nombre": "En el cielo mi nombre está escrito",
                    "coro": "<div>/// En el cielo mi nombre escrito esta. ///</div> <div>Escrito esta mi nombre all&aacute;.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 65,
                    "nombre": "Solo Dios hace al hombre feliz",
                    "coro": "<div>// Sol&oacute; Dios hace al hombre feliz Solo Dios. //</div> <div>La vida es nada todo se acaba</div> <div>Solo Dios hace al hombre feliz.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 66,
                    "nombre": "Ninguna religión",
                    "coro": "<div>// Ninguna religi&oacute;n</div> <div>puede cambiar tu ser</div> <div>La sangre de Jes&uacute;s,</div> <div>todo lo puedo hacer. //</div> <div>&nbsp;</div> <div>/// Pero conviertete a El. ///</div> <div>Y salvo ser&aacute;s.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 67,
                    "nombre": "Esta iglesia se va de esta tierra",
                    "coro": "<div>Esta iglesia se va de esta tierra</div> <div>porque aqu&iacute; no esta su mansi&oacute;n,</div> <div>// Volaremos con gozo a los cielos</div> <div>donde mora Jes&uacute;s mi salvador. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 68,
                    "nombre": "En una nube blanca Cristo volverá",
                    "coro": "<div>// En una nube blanca</div> <div>Cristo volver&aacute;</div> <div>con poder y gloria</div> <div>nos levantar&aacute;. //</div> <div>&nbsp;</div> <div>Cristo viene otra vez</div> <div>y nos llevar&aacute;</div> <div>desde el cielo vendr&aacute;</div> <div>y nos llevar&aacute;.</div> <div>// Oremos hermanos en todo lugar</div> <div>y recibiremos el don celestial. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 69,
                    "nombre": "Va bajando ya",
                    "coro": "<div>Va bajando ya, va bajando ya</div> <div>va bajando la gloria de Jehov&aacute;</div> <div>Si este pueblo empieza a orar</div> <div>El se&ntilde;or descender&aacute;,</div> <div>Va bajando la gloria de Jehov&aacute;.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 70,
                    "nombre": "Se oyen las trompetas",
                    "coro": "<div>Se oyen las trompetas,</div> <div>se oye el resonar</div> <div>// Son los angeles del cielo</div> <div>que nos vienen a llevar. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 71,
                    "nombre": "Hay una tierra nueva",
                    "coro": "<div>// Hay una tierra nueva, //</div> <div>Donde mora Jes&uacute;s.</div> <div>// Hay una tierra nueva, //</div> <div>Donde mora mi salvador.</div> <div>// Ah&iacute; yo quiero ir. //</div> <div>Donde mora Jes&uacute;s</div> <div>// Tribulaci&oacute;n no habr&aacute;, //</div> <div>Donde mora mi salvador.</div> <div>// Tribulaci&oacute;n no habr&aacute;, //</div> <div>Donde mora Jes&uacute;s.</div> <div>// Tribulaci&oacute;n no habr&aacute;, //</div> <div>Donde mora mi salvador.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 72,
                    "nombre": "Tú eres señor el lirio de los valles",
                    "coro": "<div>// Tu eres. // Se&ntilde;or el lirio de los Valles</div> <div>// Tu eres. // Se&ntilde;or la Rosa de Sar&oacute;n,</div> <div>// Tu eres. // Se&ntilde;or el amor de mi coraz&oacute;n</div> <div>porque tu eres Se&ntilde;or el Hijo de Dios. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 73,
                    "nombre": "En el altar de Dios",
                    "coro": "<div>// En el altar de Dios, //</div> <div>El fuego esta encendido,</div> <div>en el altar de Dios.</div> <div>// Nadie lo podr&aacute; apagar. //</div> <div>Porque el fuego del Se&ntilde;or</div> <div>en mi coraz&oacute;n esta.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 74,
                    "nombre": "Te alabarán oh Jehová todos los reyes",
                    "coro": "<div>Te alabar&aacute;n, oh Jehov&aacute; todos los reyes</div> <div>todos los reyes de la tierra.</div> <div>Porque han o&iacute;do los dichos de tu boca</div> <div>y andar&aacute;n en los caminos de Jehov&aacute;.</div> <div>&nbsp;</div> <div>Porque la gloria de Jehov&aacute; es grande</div> <div>porque Jehov&aacute; es excelso en sus caminos.</div> <div>Porque Jehov&aacute; atiende al humilde</div> <div>m&aacute;s mira de lejos al altivo.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 75,
                    "nombre": "Un palacio tengo",
                    "coro": "<div>/// Un palacio tengo all&aacute;</div> <div>mas lindo que el sol. ///</div> <div>el m&aacute;s all&aacute;.</div> <div>/// Bendito Cristo contigo estar&eacute;. ///</div> <div>en el m&aacute;s all&aacute;.</div> <div>/// Si tu quieres ir al cielo ven a Jes&uacute;s. ///</div> <div>El te salvar&aacute;...</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 76,
                    "nombre": "Yo voy andar por las calles de oro con Jesús",
                    "coro": "<div>// Yo voy andar por las calle de oro con Jes&uacute;s. //</div> <div>Yo voy andar por las calle de oro</div> <div>Yo voy andar por las calle de oro</div> <div>Yo voy andar por las calle de oro con Jes&uacute;s.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 77,
                    "nombre": "Él es mi Rey",
                    "coro": "<div>// El es mi Rey por cuanto yo le amo</div> <div>El es mi Rey no hay otro como El</div> <div>todos los d&iacute;as, alabanza yo le canto</div> <div>Aleluya El es mi Rey. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 78,
                    "nombre": "No hay otro como mi Dios",
                    "coro": "<div>// No hay otro como mi Dios, no hay otro. //</div> <div>// Yo le pido y el me d&aacute;, contesta mis peticiones. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 79,
                    "nombre": "Yo tengo un amigo que me ama",
                    "coro": "<div>Yo tengo un amigo que me ama,</div> <div>me ama, me ama.</div> <div>Yo tengo un amigo que me ama,</div> <div>su nombre es Jes&uacute;s.</div> <div>&nbsp;</div> <div>Que me ama, que me ama,</div> <div>que me ama si con tierno amor...</div> <div>Que me ama, que me ama,</div> <div>su nombre es Jes&uacute;s.</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 80,
                    "nombre": "En esta reunión Cristo estáa",
                    "coro": "<div>En esta reuni&oacute;n Cristo esta</div> <div>Pues El, a prometido estar</div> <div>Donde dos o tres en mi nombre est&eacute;n</div> <div>/// all&iacute; estar&eacute;. ///</div> <div>// Yo lo siento en mi</div> <div>yo lo siento en mi</div> <div>su esp&iacute;ritu me hace cantar. //</div>",
                    "tipo": 1
                },
                {
                    "idcoro": 81,
                    "nombre": "Oh Señor quiero que ardas en mi ser",
                    "coro": "Oh Señor quiero que ardas en mi ser\nComo la zarza, quiere arder con tu poder\nEn nuevas lenguas quiero hablar como señal\nQue estoy ardiendo en el fuego de tu amor\n\nQuiero alabarte y adorarte solo a tí\nComo se adora en espíritu y en verdad\nOh, Señor quiero que ardas en mi ser\ncomo la zarza quiero arder con tu poder. //",
                    "tipo": 1
                },
                {
                    "idcoro": 82,
                    "nombre": "Jehová está en su templo",
                    "coro": "// Jehová está en su templo, alábale que El vive. //\n/// Alábale. /// que él vive.",
                    "tipo": 1
                },
                {
                    "idcoro": 83,
                    "nombre": "Sin santidad",
                    "coro": "// Sin santidad nadie verá al Señor. //\npero yo sé, pero yo sé,\nque le veré, que le veré\ny con su espíritu me santificaré;\npero yo sé, pero yo sé,\nque le veré, que le veré\ny con su espíritu me santificaré.",
                    "tipo": 1
                },
                {
                    "idcoro": 84,
                    "nombre": "Mas allá veremos al señor",
                    "coro": "// Mas allá veremos al Señor. //\nen aquella Santa Sión.\n// Allí estaremos trabajando en la viña de el señor. //",
                    "tipo": 1
                },
                {
                    "idcoro": 85,
                    "nombre": "Estoy listo",
                    "coro": "// Estoy listo si, El me llama //\nEstoy listo si, El me llama\n// a su viña a trabajar, //\nY ahí estaré en la viña trabajando\nen la viña de el Señor.",
                    "tipo": 1
                },
                {
                    "idcoro": 86,
                    "nombre": "Nos vamos a gozar",
                    "coro": "// Nos vamos a gozar, nos vamos a gozar\na las bodas del Cordero nos vamos. //\n\n// Y luego nos iremos a la patria celestial\na vivir con Jesucristo por la eternidad. //",
                    "tipo": 1
                },
                {
                    "idcoro": 87,
                    "nombre": "Ardiendo el fuego",
                    "coro": "// Ardiendo el fuego en mi alma está. //\nGloriosa llama me limpiará,\nAleluya, ardiendo en mi alma está",
                    "tipo": 1
                },
                {
                    "idcoro": 88,
                    "nombre": "Que no se apague el fuego",
                    "coro": "Que no se apague el fuego\nque hay en mi corazón\nQue no se apague el fuego\nque siga ardiendo más y más\n\n// Dame gozo Señor, dame paz y amor\nY la casa que esta mas allá del sol. //\n",
                    "tipo": 1
                },
                {
                    "idcoro": 89,
                    "nombre": "Los muros caen",
                    "coro": "//Los muros caen, // Y se rompen las cadenas,\n//Los muros caen, // Se derrumban las fortalezas\n//Jehová entrego en mis manos Jerico, gritan eh!\nToca las trompetas//",
                    "tipo": 1
                },
                {
                    "idcoro": 90,
                    "nombre": "Hay un poder",
                    "coro": "Hay un poder que consume en mi corazón,\nFuego Divino que quema y no se puede apagar,\n//Yo canto hoy Aleluya, a Aleluya.//",
                    "tipo": 1
                },
                {
                    "idcoro": 91,
                    "nombre": "Con alegría saldrás",
                    "coro": "Con alegría saldrás, serás guiado con paz\nMontes y collados prorrumpirán en cantos\nY habrá voz de gozo y los árboles del campo\nSus manos palmearán\n///Árboles del campo palmearán///\nAl salir con gozo. Bis",
                    "tipo": 1
                },
                {
                    "idcoro": 92,
                    "nombre": "Yo celebraré",
                    "coro": "//Yo celebraré cantaré a Él Cantaré un nuevo canto//\n//Alabaré a Jehová porque Él ha vencido con poder//",
                    "tipo": 1
                },
                {
                    "idcoro": 93,
                    "nombre": "Los que esperan",
                    "coro": "//Los que esperan, los que esperan en Jehová//\n//Como las águilas, como las águilas\nSus alas levantarán//\nCorrerán y no se cansarán\nCaminarán, no se fatigarán\n//Nuevas fuerzas tendrán//\n//Los que esperan, los que esperan en Jehová //",
                    "tipo": 1
                },
                {
                    "idcoro": 94,
                    "nombre": "Pues tú glorioso eres señor",
                    "coro": "// Pues tu glorioso eres Señor\ny tu nombre es digno de alabar\nhaz mi corazón puro y santo ante ti\nyo te adoro con todo mi corazón //\n\nYo te adoro Señor con todo mi ser\ncon tus salmos te alabaré,\nyo te adoro Señor con todo mi ser\ntodo el día te alabaré.",
                    "tipo": 1
                },
                {
                    "idcoro": 95,
                    "nombre": "Cantaré al señor por siempre (Dm)",
                    "coro": "/Cantare al Señor por siempre\nSu diestra es todo poder/\n\n/Hecho a la mar, quien los perseguia\nginete y caballo hecho a la mar/\nhecho a la mar los carros del faraon... Hey, Hey!!!\n/laralalalala, laralalalala, laralalalalalala/\n\n/Mi Padre es Dios, y yo le exalto\nMi Padre es Dios, y le exatare/\nhecho a la mar los carros del faraon... Hey, Hey!!!\n/laralalalala, laralalalala, laralalalalalala/",
                    "tipo": 1
                },
                {
                    "idcoro": 96,
                    "nombre": "Grandes y maravillosas son tus obras",
                    "coro": "Grande y maravillosas son tus obras\nseñor Dios todopoderoso\njustos y verdaderos son tus caminos\n///Rey de los santos///\n\nQuien no te temerá oh Señor\ny glorificara tu nombre,\npues solo tú eres santo\npor lo cual todas las naciones\nvendran y te adoraran\ny te adoraran\n////aleluya amen////\n\nTemer a Dios y dadle gloria\nporque sus juicios han llegado\ny adorar aquel que hizo\nlos cielos y la tierra y\nel mar y las fuentes de las aguas\n////aleluya amen////",
                    "tipo": 1
                },
                {
                    "idcoro": 97,
                    "nombre": "Su gloria cubrió los cielos",
                    "coro": "//Su gloria cubrió los cielos\ny la tierra se llenó de su alabanza//\n//Y el resplandor fue como una luz\nrayos brillantes salían de sus manos\nY el resplandor fue como una luz\ny ahí estaba escondido su poder.//",
                    "tipo": 1
                },
                {
                    "idcoro": 98,
                    "nombre": "Quién quién quién como Jehová (Dm)",
                    "coro": "//¿Quién, quién, quién como Jehová?\nque con su poder el mar abrió//\n\nOirán las naciones lo que el hizo,\nTemblaran cuando vean sus prodigios,\n\nSu pueblo cantara, con panderos danzará\n//Y dirán quién, quién como Jehová.//",
                    "tipo": 1
                },
                {
                    "idcoro": 99,
                    "nombre": "Hosanna",
                    "coro": "Oh. Oh, oh, oh, oh, Hosanna\nHosanna al Hijo de David//\nBendito el que viene en nombre del Señor\nCon todas las fuerzas lo diga nuestra voz\n// Y en las alturas hosanna.//",
                    "tipo": 1
                },
                {
                    "idcoro": 100,
                    "nombre": "En armonía",
                    "coro": "// En armonía, si en armonía, lara lalalalalalalala//\n//Mirad cuan bueno y cuan delicioso es\nHabitad los hermanos juntos//",
                    "tipo": 1
                },
                {
                    "idcoro": 101,
                    "nombre": "Cantad a Jehová un cántico nuevo",
                    "coro": "///Cantad a Jehová un cántico nuevo///\nCantad a Jehová, alabad a Jehová\n\n///¿Y que hizo Dios? hizo maravillas///\n///¿Y que hace Dios? hace maravillas///",
                    "tipo": 1
                },
                {
                    "idcoro": 102,
                    "nombre": "Cuando el pueblo del señor",
                    "coro": "Cuando el pueblo del Señor alaba a Dios\n//Suceden cosas// Maravillosas\nCuando el pueblo del Señor alaba a Dios\n//Suceden cosas// Maravillosas\n\n//Hay sanidad, liberación desciende la bendición//\n//aquí se siente la presencia de Señor.//\n//Yo siento el fuego del Espíritu Santo//\n//Yo siento gozo, yo siento paz,\nyo siento el amor que Dios me da//",
                    "tipo": 1
                },
                {
                    "idcoro": 103,
                    "nombre": "Y los fariseos",
                    "coro": "// Y los fariseos decían sin cesar, ese hombre es pecador,\nese hombre es pecador//\n// Si es pecador, yo no lo sé,\nlo único que sé es que a mí me salvó//",
                    "tipo": 1
                },
                {
                    "idcoro": 104,
                    "nombre": "Dios es nuestro amparo",
                    "coro": "Dios es nuestro amparo, y nuestra fortaleza,\nnuestro pronto auxilio en la tribulación,\naunque se traspasen los montes a la mar,\n//aunque la tierra tiemble tenemos que cantar//",
                    "tipo": 1
                },
                {
                    "idcoro": 105,
                    "nombre": "El cielo y la tierra pasarán",
                    "coro": "//El cielo y la tierra pasarán, más tu palabra no pasará//\n//No, no, no pasará//",
                    "tipo": 1
                },
                {
                    "idcoro": 106,
                    "nombre": "Santo santo santo",
                    "coro": "Santo, Santo, Santo decían los querubines\nSanto, Santo, Santo es el Señor Jehová\nSanto, Santo, Santo es Dios que nos redime\n// Por ser tres veces Santo la tierra llena de su Gloria está//",
                    "tipo": 1
                },
                {
                    "idcoro": 107,
                    "nombre": "El poderoso de Israel",
                    "coro": "Y nosotros cantaremos celebrando su poder\ncon alegria de corazón, como el que va con la flauta\nal monte de Jehová celebraremos su poder\n\nY los ojos de los ciegos se abrirán y ellos verán\nlos oidos de los sordos oirán\nel cojo saltara con el arpa danzarán\nla lengua de los mudos cantará\n\n//El es el poderoso de Israel el poderoso de Israel\nsu vos se oirá nadie lo detendrá al poderoso de Israel//",
                    "tipo": 1
                },
                {
                    "idcoro": 108,
                    "nombre": "Señor a quién iremos",
                    "coro": "//Señor a quien iremos , Señor a quien iremos\ntu tienes palabras de vida eterna//\n//Y nosotros hemos creido y conocemos que tu eres el Cristo\ny nosotros hemos creido y conocemos\nque tu eres el hijo del Dios vivo.",
                    "tipo": 1
                },
                {
                    "idcoro": 109,
                    "nombre": "Voz de júbilo",
                    "coro": "// Voz de júbilo y de salvación\nHay en las tiendas de los justos //\nLa diestra de Jehová hace proezas\nLa diestra de Jehová sublime es\nLa diestra de Jehová hace valentías\nLa diestra de Jehová sublime es\n//No moriré, sino que viviré\nY contaré las obras de Jehová//",
                    "tipo": 1
                },
                {
                    "idcoro": 110,
                    "nombre": "Una cosa he demandado a Jehová",
                    "coro": "//Una cosa he demandado a jehova , esta buscare//\n//Que este yo en la casa de Jehová\ntodos los días de mi vida y viviré//",
                    "tipo": 1
                },
                {
                    "idcoro": 111,
                    "nombre": "Señor Jesús tu eres mi vida",
                    "coro": "Señor Jesús tú eres mi vida,\nSeñor Jesús tú eres mi amor,\n//Salvaste mi alma perdida por eso te canto\ncon el corazón, con el corazón, con el corazón//",
                    "tipo": 1
                },
                {
                    "idcoro": 112,
                    "nombre": "Sino hubiera sido",
                    "coro": "//Si no hubiera sido por el Señor// \n//Mi alma se hubiera perdido\nsino hubiera sido por el Señor//",
                    "tipo": 1
                },
                {
                    "idcoro": 113,
                    "nombre": "Este avivamiento",
                    "coro": "Este avivamiento, /// Quien lo apagará///\nSi el Señor lo ha dado ///permanecerá///\nNi lucha, ni prueba, nadie lo podrá quitar,\n//Manda fuego santifícame Señor//\n\nNo vivo yo, más Cristo vive en mí,\n///Para mi el morir es vivir///\nPara mi el vivir es Cristo.",
                    "tipo": 1
                },
                {
                    "idcoro": 114,
                    "nombre": "Jehová es mi luz",
                    "coro": "Jehová es mi luz y mi salvación ¿De quién temeré?\n¿De quién temeré?, Jehová es la fortaleza, fortaleza\nDe mi vida, porqué he de atemorizarme,\nde qué he de atemorizarme yo a nada le temeré.//",
                    "tipo": 1
                },
                {
                    "idcoro": 115,
                    "nombre": "Vamos escalando peldaños",
                    "coro": "//Vamos escalando peldaños, vamos llevando la cruz\nsigamos el camino angosto con cristo es mucho mejor//\n//ya viene la recompensa ya no voy a llorar\ntengo a cristo en mi vida y por eso voy a escalar//\nA veces me siento débil, ya no puedo escalar,\nPero alzo mis manos al cielo, y Cristo fuerzas me da.\nYa viene la recompensa, ya no voy a llorar,\nTengo a Cristo vida y por eso voy a escalar.",
                    "tipo": 1
                },
                {
                    "idcoro": 116,
                    "nombre": "Para ti oh Jehová",
                    "coro": "//Para ti oh Jehová, para ti quiero cantar,\nsiento gozo en mi alma, Cuando canto para ti//\nPor tu grande amor y tu fidelidad y mi alma se goza,\nCuando canto para ti//",
                    "tipo": 1
                },
                {
                    "idcoro": 117,
                    "nombre": "Me gozaré (Dm)",
                    "coro": "Me gozare en tu presencia Jehova\ncon todas mis fuerzas gritare//.. Hey..!!\nMe gozare en tu presencia Jehova\ncon todas mis fuerzas gritare\n\nAnte ti con gozo palmeare\ncon alegre danza celebrare\nsaltare y me gozaré//",
                    "tipo": 1
                },
                {
                    "idcoro": 118,
                    "nombre": "Oh moradora (Bm)",
                    "coro": "//Oh moradora de Sion alaba a Jehová\nGrandes son sus maravillas//\n\nSobre los montes y collados a mi amado buscare\nGrande es su hermosura\nY al estar en su presencia gozoso danzaré\nAl señor alabare\n//Grande es Jehová, digno de alabar//\n//Tú eres grande Jehová Grande es tu nombre//...",
                    "tipo": 1
                },
                {
                    "idcoro": 119,
                    "nombre": "David David danzaba",
                    "coro": "//David, David, danzaba en la presencia del señor\ny el pueblo se regocijaba//\n//Porque David andaba conforme al corazón de Jehová//\n//David, David peleo contra el oso y el león\ny el pueblo se regocijaba //\n//Saul mato a mil y David a sus diez mil\ny el pueblo se regocijaba//\n//Porque David andaba conforme al corazón de Jehová//",
                    "tipo": 1
                },
                {
                    "idcoro": 120,
                    "nombre": "Levántate en el nombre de Cristo",
                    "coro": "//Levántate en el nombre de Cristo\nLevántate en el nombre del Señor//\nToma tu puesto en la batalla\nHay una gran guerra que pelear\nHay una guerra que ganar, ¡Levántate!",
                    "tipo": 1
                },
                {
                    "idcoro": 121,
                    "nombre": "Gózate delante del señor",
                    "coro": "//Gózate Delante Del Señor, Por Que El Es Tu Rey//\nPor Que El Es Tu Rey,\nEl Es,El Es, El Es, El Es, Tu Rey.\n//Gózate Delante Del Señor, Por Que El Es Tu Roca//\nPor Que El Es Tu Roca,\nEl Es,El Es, El Es, El Es, Tu Roca.\n\n//Gózate Delante Del Señor,\nPor Que El Es Tu Escudo,//\nPor Que El Es Tu Roca,\nEl Es,El Es, El Es, El Es,\nTu escudo.",
                    "tipo": 1
                },
                {
                    "idcoro": 122,
                    "nombre": "Haré un altar para ti",
                    "coro": "//Hare un altar para ti, (para ti para ti);\ncon sacrificio de alabanza;\ncon júbilo y danza, y cantare... a Jehová//\n//Que descienda el fuego, que descienda el fuego,\nque descienda el fuego de DIOS//",
                    "tipo": 1
                },
                {
                    "idcoro": 123,
                    "nombre": "Como hizo David",
                    "coro": "Como hizo David delante de Dios\nYo danzare y me gozare, delante de mi rey\nComo hizo María con el tamboril\nYo aplaudiré y me gozare, delante  de mi rey\nComo hizo Judá cuando fue a pelear\nDaré un grito de aclamación, delante de mi rey\n\nComo hizo Josué en Jericó\n¡Gritaré! y conquistaré, delante de mi rey\nAhora puedo yo venir ante ti\nY alabarte mi Rey, Me postrare y adoraré\nA Cristo mi Rey.",
                    "tipo": 1
                },
                {
                    "idcoro": 124,
                    "nombre": "Pronto vendrá el señor",
                    "coro": "Pronto vendrá el Señor a su iglesia a levantar gloriosa\nla iglesia que compró a precio de sangre preciosa\nsus ángeles vendrán ahí se reunirá su pueblo\n// Ahí yo quiero estar para escuchar su voz cuando Él me diga:\nven buen siervo //",
                    "tipo": 1
                },
                {
                    "idcoro": 125,
                    "nombre": "Pon aceite en mi lámpara señor",
                    "coro": "//Pon aceite en mi lámpara Señor//\nque yo quiero servirte con amor\npon aceite en mi lámpara Señor\nSeñor Jesús, tú eres mi vida\nSeñor Jesús, tú eres mi amor\n//salvaste mi alma perdida\npor eso te alabo con el corazón //\ncon el corazón, con el corazón.",
                    "tipo": 1
                },
                {
                    "idcoro": 126,
                    "nombre": "En el principio",
                    "coro": "//En el principio el Espíritu de Dios\nse movía sobre las aguas//\n//pero ahora se está moviendo dentro de mi corazón//",
                    "tipo": 1
                },
                {
                    "idcoro": 127,
                    "nombre": "Oh Jerusalén",
                    "coro": "//Jerusalén que bonita eres\ncalles de oro, mar de cristal//\n//por esas calles yo voy a caminar\ncalles de oro, mar de cristal//",
                    "tipo": 1
                },
                {
                    "idcoro": 128,
                    "nombre": "Bendito sea Jehová",
                    "coro": "// Bendito sea Jehová\nquien adiestra mis manos a pelear //\nmi roca, mi escudo,\nmi castillo y mi libertador, mi gloria\nmi fuerza en quien confiaré.",
                    "tipo": 1
                },
                {
                    "idcoro": 129,
                    "nombre": "Jesús es mi refugio",
                    "coro": "// Jesús es mi refugio,\nmi escondedero, arroyo y mi sombra//\nContra el viento y el turbión,\ncomo refugio me guardará\n//Como arroyo de agua viva en tierra de sequedal//.",
                    "tipo": 1
                },
                {
                    "idcoro": 130,
                    "nombre": "Yo me alegré",
                    "coro": "// Yo me alegre con los que me decían\na la casa de Jehová iremos //\n// Ahí estaré, ahí estaré //\na la casa de Jehová iremos\n// Ahí estaré, ahí estaré //\na la casa de Jehová iremos //",
                    "tipo": 1
                },
                {
                    "idcoro": 131,
                    "nombre": "Unos brazos humildes se abrieron",
                    "coro": "Unos brazos humildes se abrieron\nen la trágica cruz del calvario\nel dolor de los clavos le hirieron\ny la cruz con su sangre manchada\n//Para dar salvación al más vil pecador\ny librarnos del mal que vendrá//",
                    "tipo": 1
                },
                {
                    "idcoro": 132,
                    "nombre": "Te espero",
                    "coro": "// Te espero, Señor te espero,\nporque tú eres lo único que tengo //\n//Cantando te alabare, orando te esperaré\nporque tú eres lo único que tengo//",
                    "tipo": 1
                },
                {
                    "idcoro": 133,
                    "nombre": "Yo sembré",
                    "coro": "//Yo sembré, Apolo regó\npero el crecimiento lo da el Señor//\n//siembra la Palabra no te tardes más\ncuando Cristo venga el te pagará//",
                    "tipo": 1
                },
                {
                    "idcoro": 134,
                    "nombre": "Mira que lindo es el señor",
                    "coro": "//Mira que lindo, que lindo,\nque lindo es nuestro Dios//\n//nadie iguala su belleza,\nnadie iguala su amor\npues todo lo que Él hace,\nlo hace con amor//",
                    "tipo": 1
                },
                {
                    "idcoro": 135,
                    "nombre": "Un paso más",
                    "coro": "//// Un paso más, un paso más de fe ////\nAdelante hermano, adelante hermano\nque allá en el cielo nos espera un galardón.",
                    "tipo": 1
                },
                {
                    "idcoro": 136,
                    "nombre": "Aunque otros canten",
                    "coro": "//Aunque otros canten para otros dioses\nhechos de metal, de madera o de bronce,\nyo alabaré el nombre de Jehová\nel nombre de Jehová alabaré//\nPorque somos sus sacerdotes\nllamado a ministrar en su presencia\ny ahora alabaré el santo nombre bendito de Jehová.",
                    "tipo": 1
                },
                {
                    "idcoro": 137,
                    "nombre": "Pon aceite en mi vida señor (Dm)",
                    "coro": "//Pon aceite en mi vida Señor,\nde tu fuego en mi corazón,\nPon aceite en mi vida Señor,\nmi lámpara aviva hoy//\n\nY me gozaré, y me alegraré.\nÉl me ha vestido de lino fino,\ndel gozo de su Salvación.\nY me gozaré, y me alegraré.\nConvidado he sido a las bodas,\na mi Rey pronto veré.",
                    "tipo": 1
                },
                {
                    "idcoro": 138,
                    "nombre": "Dame fé",
                    "coro": "// Dame fe, oh Señor dame fe,\ndame fe por favor yo te lo pido //\n// Porque hay cadenas para romper\nhay victoria para obtener cada día,\ncada hora dame fe //",
                    "tipo": 1
                },
                {
                    "idcoro": 139,
                    "nombre": "Me alegraré",
                    "coro": "// Me Alegrare, HEY! // Me alegrare en el Señor...\n// Me Alegrare, HEY! // Me alegrare en el Señor...\nCon aceite el me ungió,Y mi copa rebosa Ya\nSus mercedes y su bondad, Cada día me seguirán.",
                    "tipo": 1
                },
                {
                    "idcoro": 140,
                    "nombre": "Aunque un ejercito acampe contra mi",
                    "coro": "//Aunque un ejército acampe contra mí,\nno temerá mi corazmón//\n//Aunque contra mí se levante guerra,\nyo estaré confiado en mi Salvador//",
                    "tipo": 1
                },
                {
                    "idcoro": 141,
                    "nombre": "Estarás tu velando",
                    "coro": "// Estarás tu velando, como las diez vírgenes //\n// Y a la media noche llego el esposo,\nY las que estaban apercibidas, se fueron con El. //",
                    "tipo": 1
                },
                {
                    "idcoro": 142,
                    "nombre": "Satúrame señor",
                    "coro": "//Satúrame Señor con tu Espíritu//\n//Satúrame Señor con tu Espíritu//\n//Y déjame sentir el fuego de tu amor\naquí en mi corazón, oh Dios//",
                    "tipo": 1
                },
                {
                    "idcoro": 143,
                    "nombre": "Allá en el cielo hay un hogar",
                    "coro": "Allá en el cielo hay un hogar,\nuna corona para heredar\nsi tú te duermes otro vendrá\ny tu corona heredará heredará, heredará",
                    "tipo": 1
                },
                {
                    "idcoro": 144,
                    "nombre": "Pandero y danza",
                    "coro": "//Pandero y danza // preparado para alabar al Señor\n//Pandero y danza // preparado para alabar al Señor\n//Hosanna, hosanna al hijo de David //\nSalgamos con palmas en las manos porque ahí viene el Rey de Gloria\nSalgamos alabando su nombre porque él vive para siempre\n//Hosanna, hosanna al hijo de David //",
                    "tipo": 1
                },
                {
                    "idcoro": 145,
                    "nombre": "Libre yo soy libre (A)",
                    "coro": "//Libre, yo soy libre, las cadenas del pecado han sido rotas\nLibre, yo soy libre, para cantar, para danzar, para gozar//\n//Yo he vencido al enemigo\npor la sangre de Jesucristo yo soy libre //",
                    "tipo": 1
                },
                {
                    "idcoro": 146,
                    "nombre": "Abre mis ojos",
                    "coro": "Abre mis ojos oh Cristo Abre mis ojos Te pido\nYo quiero verte Yo quiero verte\nY contemplar Tu Majestad Y el resplandor de Tu Gloria\nDerrama Tu amor y poder Cuando cantamos:\nSanto, Santo Santo, Santo, Santo\nSanto, Santo, Santo Santo, Santo, Santo\nYo quiero verte.",
                    "tipo": 1
                },
                {
                    "idcoro": 147,
                    "nombre": "Como he de expresar",
                    "coro": "Como he de expresar la gratitud\nque hay en mi ser  para Dios\nmi Redentor quien me rescato - o - o\nyo no era nada cuando el me tomo\ny ahora yo soy un principe de su pueblo\nun principe de su pueblo un principe de su pueblo\nNo hay Dios,  No hay Dios, No hay Dios\ncomo mi Dios, Maravilloso, Maravilloso\nMaravilloso es nuestro Dios",
                    "tipo": 1
                },
                {
                    "idcoro": 149,
                    "nombre": "El nombre de Jesús",
                    "coro": "//El nombre de Jesús es poder,\nel nombre de Jesús victoria es\nel nombre de Jesús levantado está,\nel nombre de Jesús sublime es//\n//Yo le canto y le alabo, yo le exalto y le adoro\nporque el nombre de Jesús es poder//",
                    "tipo": 1
                },
                {
                    "idcoro": 150,
                    "nombre": "Gracias te doy señor",
                    "coro": "//Gracias te doy señor//\n//Por este día gracias te doy//\n\n//Me has dado paz\nMe has dado gozo\nPor este dia gracias te doy//",
                    "tipo": 1
                },
                {
                    "idcoro": 151,
                    "nombre": "Y si yo canto la gloria es para él",
                    "coro": "//Y si yo canto la gloria es para el\nEs para el, es para el\nAhora y por la eternidad//\n\n//Es para el, es para el\nes para el, es para el//\n \nY si yo canto la gloria es para el,\nahora y por la eternidad",
                    "tipo": 1
                },
                {
                    "idcoro": 152,
                    "nombre": "Que glorioso es andar con el",
                    "coro": "// Que glorioso es andar con el//\nEl mis pasos guiará\ny al fin me llevará\nQue glorioso es andar con el",
                    "tipo": 1
                },
                {
                    "idcoro": 153,
                    "nombre": "Cristo rompe las cadenas",
                    "coro": "///Cristo rompe las cadenas///\nY me da seguridad.\n\n¿Cómo es posible yo\nVivir sin mi Jesús?\n\nSi el fundamento\nDe mi vida eres Tú.\n\nTú me libraste del pecado\nY de la muerte\n\n¿Cómo es posible yo vivir sin mi Jesús?.",
                    "tipo": 1
                },
                {
                    "idcoro": 154,
                    "nombre": "Libre tu me hiciste libre",
                    "coro": "Libre, tú me hiciste libre\nTú me hiciste libre, libre, Señor\nRotas fueron las cadenas\nQue tenían atado a mi corazón",
                    "tipo": 1
                },
                {
                    "idcoro": 155,
                    "nombre": "Dame tus ojos",
                    "coro": "Dame tus ojos quiero ver\nDame tus palabras, quiero hablar\ny dame tu parecer\n\nDame tus pies yo quiero ir\nDame tus deseos para sentir\nhe dame tu pareser\n\nPre Coro\nDame lo que necesito\npara ser como tu.....\n\nCORO\nDame tu voz dame tu aliento\ntoma mi tiempo es para ti\ndame el camino que debo seguir\n\nDame tus sueños tus anhelos\ntus pensamientos tu sentir\ndame tu vida para vivir\n\nDejame ver lo que tu ves\ndame de tu gracia, tu poder\ndame tu corazón.......señor\n\nDejame ver en tu interior\npara ser cambiado, por tu amor\ndame tu corazón...............\n\nPre Coro \n\nCORO X2\n",
                    "tipo": 2
                },
                {
                    "idcoro": 157,
                    "nombre": "Tu estas aquí",
                    "coro": "Aunque mis ojos\nno te puedan ver\nte puedo sentir\nse que estas aqui\n\nAunque mis manos\nno pueden tocar\ntu rostro señor\nse que estas aqui\n\nOh oh\n\nCORO\nMi corazon puede sentir tu presencia\ntu estas aqui tu estas aqui\npuedo sentir tu majestad\ntu estas aqui tu estas aqui\n\nMi corazon puede mirar tu hermosura\ntu estas aqui tu estas aqui\npuedo sentir tu gran amor\ntu estas aqui tu estas aqui",
                    "tipo": 2
                },
                {
                    "idcoro": 158,
                    "nombre": "Yo te busco",
                    "coro": "Yo te busco, Yo te busco\nCon fuego en mi corazón\nYo te busco, Yo te busco\nRecibe mi adoración\n\nCORO\n¡Te anhelo!\n¡Te necesito!\n¡Te amo! \nmás que a mi ser",
                    "tipo": 2
                },
                {
                    "idcoro": 159,
                    "nombre": "Brilla",
                    "coro": "Este invierno se extendió más de la cuenta\nHace tiempo que no ve la primavera\nHace mucho que no brilla el Sol con fuerza\nSe nubló mi corazón sin darme cuenta\n\nY añoro la mañana cuando el Sol saldrá, cuando brillará\nBrilla desde el cielo luz de vida brilla\nVen a deshacer la escarcha\nQue este invierno me dejó\nEste frío abrazador\nVen, ven\n\nDuele el frío que ha dejado en mi tu ausencia\nDuele el aire al respirar sin tu presencia\nYa mi aceite se acabó sin darme cuenta\nY mi lámpara se apaga en la tormenta\n\nY añoro la mañana...",
                    "tipo": 2
                },
                {
                    "idcoro": 160,
                    "nombre": "Jesus mi fiel amigo",
                    "coro": "Jesús mi fiel amigo\nMi dulce caminar\nQuédate conmigo\nNo quiero volver atrás\nNo quiero volver atrás\n\nLlévame allá, donde sé que habrá paz\nDonde tengo que callar\nPara escucharte hablar\nDonde todo es realidad\nY el tiempo no existe más\n\nUna y otra vez, al estar yo junto a ti\nNo me puedo contener\nCuando me miras así\nYa no hay nada que decir\nEres todo para mi\n\nCORO\nJesús mi fiel amigo\nMi dulce caminar\nQuédate conmigo\nNo quiero volver atrás\nNo quiero volver atrás",
                    "tipo": 2
                },
                {
                    "idcoro": 161,
                    "nombre": "Este es mi deseo",
                    "coro": "Este es mi deseo\nHonrarte a tí\nCon todo mi ser\nTe adoro a tí\nCon todas mis fuerzas\nTe alabaré\nMi adoración eres tú.\n\nHoy te rindo mi ser\nTe doy mi corazón\nYo vivo para tí\nEn cada palpitar\nMientras haya aliento en mí\nDios has tu obra en mí.\n(Bis)",
                    "tipo": 2
                },
                {
                    "idcoro": 162,
                    "nombre": "Cuan grande es Dios",
                    "coro": "El esplendor de un rey\nVestido en majestad\nLa tierra alegre está\nLa tierra alegre está\nCubierto está de luz\nVenció la oscuridad\nY tiembla a su voz\nTiembla a su voz\n\nCuán grande es dios\nCántale cuán grande es dios\nY todos lo verán, cuán grande es dios\n\nDía a día él está\nY el tiempo está en él\nPrincipio y el fin\nPrincipio y el fin\n\nLa trinidad en dios\nEl padre, hijo, espíritu\nCordero y el león\nCordero y el león\n\nCuán grande es dios\nCántale cuán grande es dios\nY todos lo veran, cuán grande es dios\n\nY tu nombre sobre todo es\nTú eres digno de alabar\nY mi ser dirá\nCuán grande es dios",
                    "tipo": 2
                },
                {
                    "idcoro": 163,
                    "nombre": "La gloria de Dios",
                    "coro": "La gloria de Dios maneja mi vida\ncon hilos de amor, que puso en mi alma\nme lleva hasta él.\n\nLa gloria de Dios, gigante y sagrada,\nme carga en sus brazos, alienta mis pasos,\nme llena de paz y miel.\nSale a jugar cuando me viene a ver\ny me deja ganar.\n\nCORO\nEn la gloria de Dios tendré\nel descanso para mis pies,\ncon su manto mi frío desaparecerá\ny descansaré.\n\nDe la gloria de Dios vendrá\nbendición y abundante pan,\npara ti, para mí, y a quien quiera venir\na la gloria de Dios.",
                    "tipo": 2
                },
                {
                    "idcoro": 164,
                    "nombre": "Enamorame (G)",
                    "coro": "Quiero entregarte mis sueños\nTu voluntad haz en ellos\nMi corazón te lo entrego\nEnamórame de ti\n\nQuiero aprender a escucharte\nQuiero saber que es amarte\nDe tu verdad yo saciarme\nEnamórame de ti, Señor\n\nCORO\nQue tu presencia me inunde\nHaz de mí un odre nuevo\nCámbiame, renuévame\nEnamórame\nEnamórame de ti, Señor",
                    "tipo": 2
                },
                {
                    "idcoro": 165,
                    "nombre": "Hay momentos (G)",
                    "coro": "Hay momentos que no deberían terminar\nHay segundos que tendrían que ser eternidad\nCuando tu Espíritu Señor\nSe toca con el mío\nY mi corazón estalla en adoración\n\nCORO\n//Te amo mi Señor\nSe acaban las palabras\nSolo me queda mi alma\nPara cantarte\n\nTe adoro mi Señor\nNo hay nada alrededor\nSolo estamos tú y yo\nSolo estamos tú y yo//",
                    "tipo": 2
                },
                {
                    "idcoro": 166,
                    "nombre": "No hay lugar mas alto",
                    "coro": "A tus pies arde mi corazón\nA tus pies entrego lo que soy\nEs el lugar de mi seguridad\nDonde nadie me puede señalar\n\nMe perdonaste, me acercaste a tu presencia\nMe levantaste, hoy me postro a adorarte\n\nCORO\n//No hay lugar más alto\nMás grande que estar a tus pies\nQue estar a tus pies//\n\nY aquí permaneceré\nPostrado a tus pies\nY aquí permaneceré\nA los pies de Cristo",
                    "tipo": 2
                },
                {
                    "idcoro": 167,
                    "nombre": "Tu mirada",
                    "coro": "Tu ojos revelan que yo\nNada puedo esconder\nQue no soy nada sin ti\nOh fiel Señor\n\nTodo lo sabes de mí,\nCuando miras el corazón\nTodo lo puedes ver\nMuy dentro de mi\n\nLleva mi vida\nA una sola verdad\nQue cuando me miras\nNada puedo ocultar\n\nCORO\nSé que es tu fidelidad\nQue lleva mi vida más allá\nDe lo que puedo imaginar\n\nSé que no puedo negar\nQue tu mirada puesta em mí\nMe llena de tu paz",
                    "tipo": 2
                },
                {
                    "idcoro": 168,
                    "nombre": "A dios sea la gloria (Solo el coro)",
                    "coro": "A Dios sea la gloria\nA Dios sea la gloria\nA Dios sea la gloria\nPor lo que hizo por mí\nCon su sangre me ha salvado\nSu poder me ha levantado\nA Dios sea la gloria\nPor lo que hizo por mí",
                    "tipo": 2
                },
                {
                    "idcoro": 169,
                    "nombre": "Mi mejor adoración (G)",
                    "coro": "Mi mejor adoración\nEs entregarte todo mi corazón\nY rendirte mi vida sin reservas, Señor\nEs entregarte todo mi corazón\n\nCORO\nNo quiero tener un encuentro emocional\nQuiero encontrarme contigo\nY verte, Señor, sentado en majestad\nToma mi corazón, quiero cambiar",
                    "tipo": 2
                },
                {
                    "idcoro": 170,
                    "nombre": "Hay una fuente en mí (A)",
                    "coro": "Hay una fuente en mí\nQue está brotando\nQue está fluyendo\nQue está fluyendo\nDentro de mí\n\nHay una fuente en mí\nDíselo al Señor\nQue está brotando\nQue está fluyendo\nDentro de mí\n\nCORO\n//Es un río de alabanza\nY de adoración\nDirigido hacia ti\nSeñor Jesús, recíbelo//",
                    "tipo": 2
                },
                {
                    "idcoro": 171,
                    "nombre": "Yo solo quiero estar donde tu estás (A)",
                    "coro": "Yo solo quiero estar dónde Tú estás\nViviendo diario en tu presencia\nNo quiero darte solo adoración\nYo quiero ser adorador\n\nYo solo quiero estar dónde Tú estás\nEn tu habitación por siempre\nLlévame al lugar dónde Tú estás\nYo quiero estar dónde Tú estás\n\nCORO\nYo quiero estar contigo\nMorando en tu presencia\nComiendo de tu mesa\nY rodeado de tu gloria\n\nEn tu presencia\nEs donde siempre quiero estar\nYo solo quiero estar\nYo quiero estar dónde Tú estás\n\nOh mi Dios\nTú eres mi fuerza y mi canción\nY aunque débil sea\nEn tu presencia fuerte soy\n\nCORO",
                    "tipo": 2
                },
                {
                    "idcoro": 172,
                    "nombre": "Vine a alabar a Dios (C)",
                    "coro": "//Vine a alabar a Dios//\nVine a alabar su nombre\nVine a alabar a Dios\n\nCORO\nÉl vino a mi vida\nen un día muy especial;\nEntró en mi corazón\nme mostró un camino mejor\n\nY ésta es la razón\npor la que digo que:\n¡vine a alabar a Dios!",
                    "tipo": 2
                },
                {
                    "idcoro": 173,
                    "nombre": "Todo se lo debo a Él (C)",
                    "coro": "Mi despertar y mi atardecer\nTodo se lo debo a Él\nSi en mi vivir no existiera Él\nNo sé que sería de mí\nPorque todo se lo debo a Él\n\nCORO\n//Todo se lo debo a Él\nTodo se lo debo a Él\nMi vida y sustento\nMi fuerza y esperanza\nTodo se lo debo a Él//\n\nSi en mi aliento el no fuera el viento\n¿Cómo podría vivir?\nY si de mi corazón no fuera el centro\nHabría un vacío en mí\nY es que todo se lo debo a Él\n\nCORO\n//Todo se lo debo a Él\nTodo (todo se lo debo a Él)\nMi casa y mi familia\nY todas mis canciones\nTodo se lo debo a Él\n\nTodo se lo debo a Él\nTodo se lo debo a Él\nMi vida y sustento\nMi fuerza y esperanza\nTodo se lo debo a Él//",
                    "tipo": 2
                },
                {
                    "idcoro": 174,
                    "nombre": "Alaba a Dios (C)",
                    "coro": "Dios no rechaza oración\nOración es alimento\nNunca vi un justo sin respuesta\nO quedar en sufrimiento\n\nBasta solamente esperar\nLo que Dios irá a hacer\nCuando Él levanta sus manos\nEs hora de vencer\n\nCORO\nOh, alaba\nSimplemente alaba\nEstás llorando, alaba\nEn la prueba alaba\nEstás sufriendo, alaba\nNo importa, alaba\nTu alabanza Él escuchará\n\nDios va al frente abriendo caminos\nQuebrando cadenas, sacando espinas\nManda a sus ángeles contigo a luchar\nÉl abre puertas nadie puede cerrar\n\nÉl trabaja para los que confían\nCamina contigo de noche y de día\nLevanta tus manos, tu victoria llegó\nComienza a cantar\nY alaba a Dios\n\nAlaba a Dios\nAlaba a Dios\nAlaba a Dios\n\nLa gente necesita entender\nLo que Dios está hablando\nCuando Él queda en silencio\nEs porque está trabajando\n\nBasta solamente esperar\nLo que Dios irá a hacer\nCuando Él extiende sus manos\nEs hora de vencer\n\nCORO Oh alaba...\n",
                    "tipo": 2
                },
                {
                    "idcoro": 175,
                    "nombre": "Al estar aquí",
                    "coro": "Al estar en la presencia de tu divinidad\nY al contemplar la hermosura de tu santidad\nMi espíritu se alegra en tu majestad\nTe adoro a ti, te adoro a ti\n\nCuando veo la grandeza de tu dulce amor\nY compruebo la pureza de tu corazón\nMi espíritu se alegra en tu majestad\nTe adoro a ti, te adoro a ti\n\nCORO\n//Y al estar aquí, delante de ti te adorare\nPostrado ante ti, mi corazón te adora oh Dios\nY siempre quiero estar\nPara adorar y contemplar tu santidad\nTe adoro a ti Señor, te adoro a ti//",
                    "tipo": 2
                },
                {
                    "idcoro": 176,
                    "nombre": "Como la brisa",
                    "coro": "Abro el corazón y las ventanas\nCuando empieza la mañana\nPor si quieres hoy venir\n\nEres como el viento que no avisa\nCuando sopla y trae la brisa\nVen y sopla sobre mí\n\nY mi corazón vuelve a latir\nY se renueva si estás aquí\nY mi corazón vela por ti\nPorque te espera, vuelve a venir\n\nCORO\nEspíritu de dios, ven a mi vida\nComo lluvia que tardó\nY al desierto vida dio\n\nDesciende sobre mí como la brisa\nQue destile sobre mí\nTu poder en mí haz fluir",
                    "tipo": 2
                },
                {
                    "idcoro": 178,
                    "nombre": "Padre del cielo te adoramos",
                    "coro": "Padre del cielo te adoramos\nAlzamos hoy tu nombre en alto\nQue tu reino se establezca en la alabanza\nDe tu pueblo que declara tu poder\n\nBendito sea el Señor Dios poderoso\nQuien fue, quien es y quien vendrá\nBendito sea el Señor Dios poderoso\nPor siempre Reinara",
                    "tipo": 2
                },
                {
                    "idcoro": 179,
                    "nombre": "Señor llevame a tus atrios",
                    "coro": "Señor llevame a tus atrios\nY al lugar santo\nAl altar de bronce\nSeñor tu rostro quiero ver\n\nPasame la muchedumbre\nPor donde el secerdote canta\nTengo hambre y sed de justicia\nY solo encuentro un lugar\n\nCORO\nLlevame al lugar santisimo \npor la sangre del cordero redentor\nLlevame al lugar santisimo \n//tocame, limpiame Heme aqui//",
                    "tipo": 2
                },
                {
                    "idcoro": 180,
                    "nombre": "Gracias",
                    "coro": "Me has tomado en tus brazos\nY me has dado salvación\nDe tu amor has derramado\nEn mi corazon\n\nNo sabré agradecerte\nlo que has hecho por mí\nSólo puedo darte ahora mi cancion\n\nCORO\n//Yo te doy gracias, Gracias, Señor\nGracias mi Señor Jesus//\n\nEn la cruz diste tu vida\nEntregaste todo ahí\nVida eterna regalaste al morir\n\nPor tu sangre tengo entrada\nAnte el trono celestial\nPuedo entrar confiadamente ante ti\n\nCORO\nPara darte las gracias, gracias señor\nGracias mi señor Jesús\nGracias, gracias señor\ngracias mi señor Jesús",
                    "tipo": 2
                },
                {
                    "idcoro": 181,
                    "nombre": "Con todo mi corazón",
                    "coro": "Levanto mis manos hoy a ti\nRogando en tu presencia\nUn toque especial para mí\nNo hay nada que pueda hoy suplir, no, no, no\nTu dulce presencia\nQue llena mi vida de ti\n\nCORO\nCon todo mi corazón\nYo quiero ser fiel\nNo quiero fallarte más\nAyúdame Dios\nY en mi debilidad\nFuerte seré\nEn ti, Señor",
                    "tipo": 2
                },
                {
                    "idcoro": 182,
                    "nombre": "Hermoso eres",
                    "coro": "En mi corazón hay una canción\nque demuestra mi pasión\npara mi Rey y mi Señor\npara Aquel que me amó\n\nCORO\n//Hermoso eres, mi Señor\nhermoso eres Tú, amado mío\nTú eres la fuente de mi vida\ny el anhelo de mi corazón//",
                    "tipo": 2
                },
                {
                    "idcoro": 183,
                    "nombre": "Ven espíritu ven",
                    "coro": "//Ven\nEspíritu ven\nY lléname, Señor\nCon tu preciosa unción//\n\nCORO\n//Purifícame y lávame\nRenuévame\nRestáurame, Señor\nCon tu poder\n\nPurifícame y lávame\nRenuévame\nRestáurame, Señor\nTe quiero conocer//",
                    "tipo": 2
                },
                {
                    "idcoro": 184,
                    "nombre": "Dios manda lluvia",
                    "coro": "Dios, manda lluvia, \nderrama de tu espíritu\nDesciende hoy tu fuego\nSana mis heridas, \nrestáurame Señor\n\nCORO\nManda la lluvia, \nel rocío de tu amor\nLlenando las vidas de tu pueblo hoy, Señor\n\nManda la lluvia, \nel rocío de tu amor\nVisita hoy mi vida, \ncámbiame, Señor",
                    "tipo": 2
                },
                {
                    "idcoro": 185,
                    "nombre": "Hacemos hoy",
                    "coro": "Hacemos hoy ante tu altar\nUn compromiso de vivir en santidad\nHacemos hoy ante tu altar\nUn pacto de hombres que te quieren agradar\n\nCon manos limpias, corazón puro para ti\n\nCuidaré mis ojos\nCuidaré mis manos\nCuidaré mi corazón\nDe todo lo malo\nDe todo lo vano\nNo te quiero fallar jamás",
                    "tipo": 2
                },
                {
                    "idcoro": 186,
                    "nombre": "Jesús, haz mi carácter",
                    "coro": "//Jesús, haz mi caracter\nMás como el tuyo\nYo quiero ser//\n\nCORO\n//Porque en esta vida hay cosas que pasan\nQue yo no entiendo\nPorque yo quiero demostrar tu amor\nA cada instante\n\nHazme hacer tu voluntad\nY morir a mi viejo hombre\nHaz mi caracter más como el tuyo\nYo quiero ser//",
                    "tipo": 2
                },
                {
                    "idcoro": 187,
                    "nombre": "El espíritu de Dios está en este lugar",
                    "coro": "El Espíritu de Dios está en este lugar\nEl Espíritu de Dios se mueve en este lugar\nEstá aquí para consolar\nEstá aquí para liberar\nEstá aquí para guiar, el Espíritu de Dios está aquí\n\nCORO\nMuévete en mí\nMuévete en mí\nToca mi mente, mi corazón\nLlena mi vida de tu amor\nMuévete en mí\nDios Espíritu, muévete en mí",
                    "tipo": 2
                },
                {
                    "idcoro": 188,
                    "nombre": "Hay una unción",
                    "coro": "Hay una unción aquí, cayendo sobre mí\nSanándome, cambiando mi ser\nHay una unción aquí, cayendo sobre mí\nSanándome, cambiando mi ser\n\nCORO\nMi espíritu y mi alma, se están llenando\nCon el poder del Espíritu Santo\nMi vida nunca mas será igual\n\nMi espíritu y mi alma, se están llenando\nPor el poder del Espíritu Santo, (Oh)\nMi vida nunca mas será igual",
                    "tipo": 2
                },
                {
                    "idcoro": 189,
                    "nombre": "Escucharte hablar",
                    "coro": "Quiero escuchar tu dulce voz\nRompiendo el silencio en mí ser\nSé que me haría estremecer\nMe haría llorar o reír\nY caería rendido ante ti\n\nCORO\nY no podría estar ante ti\nEscuchándote hablar\nSin llorar como un niño\nY pasaría el tiempo así\nSin querer nada más\nNada más que escucharte hablar",
                    "tipo": 2
                },
                {
                    "idcoro": 190,
                    "nombre": "Jesús viene en las nubes",
                    "coro": "//Jesús viene en las nubes, a su Iglesia a levantar,\nsi tú no te preparas aquí te quedarás//\n\nMi alma volará, mi alma volará,\nal son de la trompeta mi alma volará//",
                    "tipo": 1
                },
                {
                    "idcoro": 191,
                    "nombre": "Un milagro",
                    "coro": "//Un milagro Dios quiere hacer en ti//.\nQuiere salvarte, quiere sanarte,\nQuiere ayudarte y hacerte el bien.",
                    "tipo": 1
                },
                {
                    "idcoro": 192,
                    "nombre": "Después de la batalla",
                    "coro": "Después de la batalla nos coronará\nDios nos coronará, Dios nos coronará\ndespués de la batalla nos coronará.\nEn aquella santa Sión \n\nMás allá, mas allá\nen aquella santa Sión\n\nDespués de la batalla nos coronará\nen aquella santa Sión.",
                    "tipo": 1
                },
                {
                    "idcoro": 193,
                    "nombre": "Si esta tierra ardiera en fuego",
                    "coro": "Si Esta Tierra Ardiera En Fuego A Donde Iremos A Morar\n\n//Yo Iré, Yo Iré Con Jesús Allá A Morar.//",
                    "tipo": 1
                },
                {
                    "idcoro": 194,
                    "nombre": "Manda fuego señor",
                    "coro": "Manda fuego Señor, manda fuego Señor,\ny avívanos con tu poder;\nno dejes que satán, nos venga a quitar,\nEl Espíritu Santo de Dios.",
                    "tipo": 1
                },
                {
                    "idcoro": 195,
                    "nombre": "Quédate señor",
                    "coro": "Quédate señor, quédate señor\nquédate señor en cada corazón\nQuedate señor, quédate señor\nquédate señor en mi\n\nOh Cristo mío haz de mi alma un altar\npara adorarte con devoción\npara beber de las aguas de la vida\ny asi saciar mi pobre corazón",
                    "tipo": 1
                },
                {
                    "idcoro": 196,
                    "nombre": "Una mirada de fé",
                    "coro": "Una mirada de Fé\nUna mirada de Fé\nEs la que puede salvar al pecador\n\nY si tu vienes a Cristo Jesús\nÉl te perdonara\nPorque una mirada de Fé\nEs la que puede salvar al pecador",
                    "tipo": 1
                },
                {
                    "idcoro": 197,
                    "nombre": "Bendeciré a Jehová en todo tiempo",
                    "coro": "Bendeciré a Jehová en todo tiempo\nSu alabanza será siempre en mi boca\nEn Jehová se gloriará mi alma\nLo oirán los mansos y se alegrarán\n\nEngrandeced a Jehová conmigo\nY ensalcemos a una su nombre\nBusqué a Jehová, y El me oyó\nY de todos mis temores me libro",
                    "tipo": 1
                },
                {
                    "idcoro": 198,
                    "nombre": "Levántate señor (Am)",
                    "coro": "//Levántate, levántate Señor\nY que tus enemigos huyan delante de ti//\n\nMás los justos se alegrarán\nCantarán con regocijo\nEl Señor se ha levantado\nHa triunfado con poder\nMás los justos se alegrarán\nCantarán con regocijo\nEl Señor se ha levantado\nHa triunfado con poder",
                    "tipo": 1
                },
                {
                    "idcoro": 199,
                    "nombre": "Vino celestial (Am)",
                    "coro": "El ha cambiado mi lamento\nEn alabanza\nHa ceñido mi vida con su Santo Espíritu\nHa transformado el agua en vino\nHa derramado su fresca unción\nY su Espíritu ministra vino celestial\n\n///////Hay vino celestial///////\nSe derrama sobre este lugar",
                    "tipo": 1
                },
                {
                    "idcoro": 200,
                    "nombre": "Eres señor vencedor (Em)",
                    "coro": "Eres Señor, vencedor\nEl invencible\nEres campeón, ganador\nEn batalla\nEres mi Rey y mi Dios\nEl que Cuida a su Pueblo\n\nPor eso yo\nTe canto y te alabo\nPorque sé\nQue me proteges porque estoy\nDe tu lado\nPor eso yo\nTe canto y te adoro\nPorque sé\nQue nunca jamás me dejarás\nDesamparado",
                    "tipo": 1
                },
                {
                    "idcoro": 201,
                    "nombre": "Le llaman guerrero",
                    "coro": "Cuentan de un Dios\nQue hace maravillas\nDandole poder a su pueblo\n\nGracias a el conquistaron reinos\nTomaron ciudades en su nombre\n\nFue cantando, otras veces gritando\nAcompanado de sonido de bocina\nFue cantando otras veces gritando\nA viva voz a su Dios\n\nColumna de fuego, nube del desierto\nPena de un rey para todo el sediento\nColumna de fuego, nube del desierto\nPena de un rey para todo el sediento\n\nLe llaman Guerrero\nLe llaman Guerrero\nLe llaman Guerrero\nJehová de los ejercitos\nLe llaman Guerrero\nLe llaman Guerrero\nLe llaman Guerrero\nJehová de los ejercitos",
                    "tipo": 1
                },
                {
                    "idcoro": 202,
                    "nombre": "Remolineando (Cm)",
                    "coro": "Hay muchas formas de alabar tu nombre\nY de exaltarte, oh Jehová\nHay muchas formas de magnificarte\nPero ahora lo haré así\n\nSacó mi vida del anonimato\nMe dio corona y un vestido real\nAsí es Jehová, que exalta al pequeño\nPor causa de Él yo me haré más vil\nPor causa de Él yo me haré más vil\nPor causa de Él yo me haré más vil\n\nRemolineando, remolineando\nCelebraré a Jehová\nRemolineando, remolineando\nMe haré más vil por causa de Jehová",
                    "tipo": 1
                },
                {
                    "idcoro": 203,
                    "nombre": "Aún es tiempo (Cm)",
                    "coro": "Aún es tiempo, wooh\nPonte en el tiempo\nAún es tiempo, wooh\nDe restauración\n\nEl cielo pasará, la tierra se moverá\nReyes caerán, reinos se olvidarán\nMas tu palabra no no pasará\nPermanecerá\nEl cielo pasará, la tierra se moverá\nReyes caerán, reinos se olvidarán\nMas tu palabra no no pasará\nPermanecerá",
                    "tipo": 1
                },
                {
                    "idcoro": 204,
                    "nombre": "Yo te adoro señor (Dm)",
                    "coro": "Pues tú glorioso eres, señor\nY tu nombre es digno de alabar\nHas mi corazón puro y santo ante ti\nYo te adoro con todo mi corazón\n\nYo te adoro señor, con todo mi ser\nYo con salmos te alabaré\nYo te adoro señor con todo mi ser\nTodo el día te alabaré\n\nPues tu glorioso eres, señor\nY tu nombre es digno de alabar\nHas mi corazón puro y santo ante ti\nYo te adoro con todo mi corazón",
                    "tipo": 1
                },
                {
                    "idcoro": 205,
                    "nombre": "Maravilloso es el señor Jesús (Dm)",
                    "coro": "Maravilloso es el Señor Jesús\nÉl reina con poder, poder\nPoder, poder, poder\n\n//Él es mi rey, él es mi rey\nY en su casa cantaré.//",
                    "tipo": 1
                },
                {
                    "idcoro": 206,
                    "nombre": "El nombre de Jesús (Dm)",
                    "coro": "El nombre de Jesús es poder\nEl nombre de Jesús victoria es\nEl nombre de Jesús levantado está\nEl nombre de Jesús sublime es\n\n//Yo le canto y le alabo\nYo le exalto y le adoro\nPorque el nombre de Jesús\nEs poder//",
                    "tipo": 1
                },
                {
                    "idcoro": 207,
                    "nombre": "El señor vuelve a Jerusalén (Dm)",
                    "coro": "El señor vuelve a Jerusalén,\nsea la paz delante del rey\nel señor vuelve a Jerusalén,\nShalom, sea la paz\n\nA sus amigos restaurará\nShalom, sea la paz\nsus transgresiones olvidará\nen Jerusalén sea la paz.",
                    "tipo": 1
                },
                {
                    "idcoro": 208,
                    "nombre": "Viva la fé viva la esperanza viva el amor",
                    "coro": "Viva la fe, viva la Esperanza, viva el Amor\nViva la fe, viva la Esperanza, viva el Amor\nViva la fe, viva la Esperanza, viva el Amor\nQue viva Cristo, que viva Cristo, que viva el rey\n\nQue viva Cristo, que viva, que viva Cristo\nQue viva, que viva Cristo, que viva el rey",
                    "tipo": 1
                },
                {
                    "idcoro": 209,
                    "nombre": "Con mis manos levantadas",
                    "coro": "Con mis manos levantadas hacia el cielo\nMe presento ante ti hoy mi Señor\nPara recibir de ti la fuerza y el poder\nPara vivir junto a ti\n\nLlenas hoy mi corazón con tu presencia\nLlenas de alegría y paz todo mi ser\nDe cualquier necesidad tú me responderás\nPorque me amas, me amas",
                    "tipo": 2
                }
            ]
        }';
        $jsonObject = json_decode($coros);

        // Verificar si la decodificación fue exitosa
        if ($jsonObject && isset($jsonObject->RECORDS)) {
            // Iterar sobre los registros
            foreach ($jsonObject->RECORDS as $record) {
                // Acceder a los datos individuales del registro
                Coro::create([
                    'tipo_coro' => ($record->tipo == 1) ? 0 : 1,
                    'nombre' => $record->nombre,
                    'slug' => Str::slug($record->nombre),
                    'id_autor' => null,
                    'nota' => null,
                    'estado' => 1,
                    'letra' => $record->coro,
                    'tipo_video' => 1,
                    'url_video' => null
                ]);
            }
        } else {
            // Manejar el caso en el que la decodificación JSON falla
            echo "Error al decodificar JSON";
        }
    }
}
