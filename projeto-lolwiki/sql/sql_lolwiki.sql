create database if not exists lolwiki;

use lolwiki;

create table if not exists campeao
(
    skin_padrao varchar (50),
    nome_campeao varchar(30),
    data_lancamento date,
    dificuldade_campeao varchar(15),
    tipo_dano varchar(20),
    tipo_alcance varchar(20),
    historia_campeao varchar(999),
    preco_campeao_ea int,
    preco_campeao_rp int,
    funcao_campeao_A varchar(15),
    funcao_campeao_B varchar(15),
    rota_sugerida varchar(15),
    primary key(nome_campeao)
    
) engine=innoDB;

create table if not exists estatisticas_base
(
	nome_campeao varchar(30),
	alcance_ataque int,
    dano_critico varchar(10),
    dano_ataque varchar(10),
    vel_movimento int,
    resis_magica varchar(10),
    regen_mana varchar(10),
    mana varchar(10),
    armadura varchar(10),
    vel_ataque_base varchar(10),
    vel_ataque_bonus varchar(10),
    regen_vida varchar(10),
    vida varchar(10),
    primary key(nome_campeao),
	foreign key(nome_campeao) references campeao(nome_campeao)
	
) engine=innoDB;

insert into campeao (nome_campeao, skin_padrao, funcao_campeao_A, funcao_campeao_B)
VALUES
	("Ahri", "images/champions/ahri/ahri.jpg", "mago", "assasino"),
    ("Akali", "images/champions/akali/akali.jpg", "assassino", ""),
    ("Aatrox", "images/champions/aatrox/aatrox.jpg", "lutador", "tanque"),
    ("Alistar", "images/champions/alistar/alistar.jpg", "suporte", "tanque"),
    ("Amumu", "images/champions/amumu/amumu.jpg", "tanque", "mago"),
    ("Anivia", "images/champions/anivia/anivia.jpg", "mago", "suporte"),
    ("Annie", "images/champions/annie/annie.jpg", "mago", ""),
    ("Aphelios", "images/champions/aphelios/aphelios.png", "atirador", ""),
    ("Ashe", "images/champions/ashe/ashe.jpg", "atirador", "suporte"),
    ("Aurelion Sol", "images/champions/ausol/ausol.jpg", "mago", ""),
    ("Azir", "images/champions/azir/azir.jpg", "mago", "atirador"),
    ("Bardo", "images/champions/bardo/bardo.jpg", "suporte", "mago"),
    ("Blitzcrank", "images/champions/blitzcrank/blitzcrank.jpg", "tanque", "lutador"),
    ("Brand", "images/champions/brand/brand.jpg", "mago", ""),
    ("Braum", "images/champions/braum/braum.jpg", "suporte", "tanque"),
    ("Caitlyn", "images/champions/caitlyn/caitlyn.jpg", "atirador", ""),
    ("Camille", "images/champions/camille/camille.jpg", "lutador", "tanque"),
    ("Cassiopeia", "images/champions/cassiopeia/cassiopeia.jpg", "mago", ""),
    ("Cho'Gath", "images/champions/chogath/chogath.jpg", "tanque", "mago"),
    ("Corki", "images/champions/corki/corki.jpg", "atirador", ""),
    ("Darius", "images/champions/darius/darius.jpg", "lutador", "tanque"),
    ("Diana", "images/champions/diana/diana.jpg", "mago", "lutador"),
    ("Dr. Mundo", "images/champions/drmundo/drmundo.jpg", "tanque", "lutador"),
    ("Draven", "images/champions/draven/draven.jpg", "atirador", ""),
    ("Ekko", "images/champions/ekko/ekko.jpg", "assassino", "lutador"),
    ("Elise", "images/champions/elise/elise.jpg", "mago", "lutador"),
    ("Evellyn", "images/champions/evelynn/evelynn.jpg", "assassino", "mago"),
    ("Ezreal", "images/champions/ezreal/ezreal.jpg", "atirador", "mago"),
    ("Fiddlesticks", "images/champions/fiddlesticks/fiddlesticks.jpg", "mago", "suporte"),
    ("Fiora", "images/champions/fiora/fiora.jpg", "lutador", "assassino"),
    ("Fizz", "images/champions/fizz/fizz.jpg", "assassino", "mago"),
    ("Galio", "images/champions/galio/galio.jpg", "mago", "tanque"),
    ("Gangplank", "images/champions/gangplank/gangplank.jpg", "lutador", ""),
    ("Garen", "images/champions/garen/garen.jpg", "tanque", "lutador"),
    ("Gnar", "images/champions/gnar/gnar.jpg", "lutador", "tanque"),
    ("Gragas", "images/champions/gragas/gragas.jpg", "mago", "lutador"),
    ("Graves", "images/champions/graves/graves.jpg", "atirador", ""),
    ("Hecarim", "images/champions/hecarim/hecarim.jpg", "lutador", "tanque"),
    ("Heimerdinger", "images/champions/heimerdinger/heimerdinger.jpg", "mago", "suporte"),
    ("Illaoi", "images/champions/illaoi/illaoi.jpg", "lutador", "tanque"),
    ("Irelia", "images/champions/irelia/irelia.jpg", "lutador", "assassino"),
    ("Ivern", "images/champions/ivern/ivern.jpg", "suporte", "mago"),
    ("Janna", "images/champions/janna/janna.jpg", "suporte", "mago"),
    ("Jarvan IV", "images/champions/jarvan/jarvan.jpg", "lutador", "tanque"),
    ("Jax", "images/champions/jax/jax.jpg", "lutador", "assassino"),
    ("Jayce", "images/champions/jayce/jayce.jpg", "lutador", "atirador"),
    ("Jhin", "images/champions/jhin/jhin.jpg", "atirador", "mago"),
    ("Jinx", "images/champions/jinx/jinx.jpg", "atirador", ""),
    ("Kai'sa", "images/champions/kaisa/kaisa.jpg", "atirador", ""),
    ("Kalista", "images/champions/kalista/kalista.jpg", "atirador", ""),
    ("Karma", "images/champions/karma/karma.jpg", "suporte", "mago"),
    ("Karthus", "images/champions/karthus/karthus.jpg", "mago", ""),
    ("Kassadin", "images/champions/kassadin/kassadin.jpg", "mago", "assassino"),
    ("Katarina", "images/champions/katarina/katarina.jpg", "assassino", "mago"),
    ("Kayle", "images/champions/kayle/kayle.jpg", "lutador", "suporte"),
    ("Kayn", "images/champions/kayn/kayn.jpg", "assassino", "lutador"),
    ("Kennen", "images/champions/kennen/kennen.jpg", "mago", "atirador"),
    ("Kha'Zix", "images/champions/khazix/khazix.jpg", "assassino", ""),
    ("Kindred", "images/champions/kindred/kindred.jpg", "atirador", ""),
    ("Kled", "images/champions/kled/kled.jpg", "lutador", "tanque"),
    ("Kog'Maw", "images/champions/kogmaw/kogmaw.jpg", "atirador", "mago"),
    ("LeBlanc", "images/champions/leblanc/leblanc.jpg", "assassino", "mago"),
    ("Lee Sin", "images/champions/leesin/leesin.jpg", "lutador", "assassino"),
    ("Leona", "images/champions/leona/leona.jpg", "suporte", "tanque"),
    ("Lillia", "images/champions/lillia/lillia.png", "mago", "lutador"),
    ("Lissandra", "images/champions/lissandra/lissandra.jpg", "mago", ""),
    ("Lucian", "images/champions/lucian/lucian.jpg", "atirador", ""),
    ("Lulu", "images/champions/lulu/lulu.jpg", "suporte", "mago"),
    ("Lux", "images/champions/lux/lux.jpg", "mago", "suporte"),
    ("Malphite", "images/champions/malphite/malphite.jpg", "tanque", "lutador"),
    ("Malzahar", "images/champions/malzahar/malzahar.jpg", "mago", "assassino"),
    ("Maokai", "images/champions/maokai/maokai.jpg", "tanque", "mago"),
    ("Master Yi", "images/champions/masteryi/masteryi.jpg", "lutador", "assassino"),
    ("Miss Fortune", "images/champions/missfortune/missfortune.jpg", "atirador", ""),
    ("Mordekaiser", "images/champions/mordekaiser/mordekaiser.jpg", "lutador", ""),
    ("Morgana", "images/champions/morgana/morgana.jpg", "mago", "suporte"),
    ("Nami", "images/champions/nami/nami.jpg", "suporte", "mago"),
    ("Nasus", "images/champions/nasus/nasus.jpg", "lutador", "tanque"),
    ("Nautilus", "images/champions/nautilus/nautilus.jpg", "suporte", "tanque"),
    ("Neeko", "images/champions/neeko/neeko.jpg", "mago", "suporte"),
    ("Nidalee", "images/champions/nidalee/nidalee.jpg", "mago", "assassino"),
    ("Nocturne", "images/champions/nocturne/nocturne.jpg", "assassino", "lutador"),
    ("Nunu & Willump", "images/champions/nunu/nunu.jpg", "lutador", "tanque"),
    ("Olaf", "images/champions/olaf/olaf.jpg", "lutador", "tanque"),
    ("Orianna", "images/champions/orianna/orianna.jpg", "mago", "suporte"),
    ("Ornn", "images/champions/ornn/ornn.jpg", "tanque", "lutador"),
    ("Pantheon", "images/champions/pantheon/pantheon.jpg", "lutador", "assassino"),
    ("Poppy", "images/champions/poppy/poppy.jpg", "tanque", "lutador"),
    ("Pyke", "images/champions/pyke/pyke.jpg", "assassino", "suporte"),
    ("Qiyana", "images/champions/qiyana/qiyana.jpg", "assassino", "lutador"),
    ("Quinn", "images/champions/quinn/quinn.jpg", "atirador", "assassino"),
    ("Rakan", "images/champions/rakan/rakan.jpg", "suporte", ""),
    ("Rammus", "images/champions/rammus/rammus.jpg", "tanque", "lutador"),
    ("Rek'Sai", "images/champions/reksai/reksai.jpg", "lutador", ""),
    ("Rell", "images/champions/rell/rell.jpg", "tanque", ""),
    ("Renekton", "images/champions/renekton/renekton.jpg", "lutador", "tanque"),
    ("Rengar", "images/champions/rengar/rengar.jpg", "assassino", "lutador"),
    ("Riven", "images/champions/riven/riven.jpg", "lutador", "assassino"),
    ("Rumble", "images/champions/rumble/rumble.jpg", "mago", "assassino"),
    ("Ryze", "images/champions/ryze/ryze.jpg", "mago", "lutador"),
    ("Samira", "images/champions/samira/samira.png", "atirador", ""),
    ("Sejuani", "images/champions/sejuani/sejuani.jpg", "tanque", "lutador"),
    ("Senna", "images/champions/senna/senna.jpg", "suporte", "atirador"),
    ("Seraphine", "images/champions/seraphine/seraphine.png", "suporte", "mago"),
    ("Sett", "images/champions/sett/sett.png", "lutador", "tanque"),
    ("Shaco", "images/champions/shaco/shaco.jpg", "assassino", ""),
    ("Shen", "images/champions/shen/shen.jpg", "tanque", "lutador"),
    ("Shyvana", "images/champions/shyvana/shyvana.jpg", "lutador", "tanque"),
	("Singed", "images/champions/singed/singed.jpg", "lutador", "tanque"),
    ("Sion", "images/champions/sion/sion.jpg", "tanque", "lutador"),
    ("Sivir", "images/champions/sivir/sivir.jpg", "atirador", ""),
    ("Skarner", "images/champions/skarner/skarner.jpg", "tanque", "lutador"),
    ("Sona", "images/champions/sona/sona.jpg", "suporte", "mago"),
    ("Soraka", "images/champions/soraka/soraka.jpg", "suporte", "mago"),
    ("Swain", "images/champions/swain/swain.jpg", "mago", "lutador"),
    ("Sylas", "images/champions/sylas/sylas.jpg", "mago", "assassino"),
    ("Syndra", "images/champions/syndra/syndra.jpg", "mago", ""),
    ("Tahm Kench", "images/champions/tahmkench/tahmkench.jpg", "suporte", "tanque"),
	("Taliyah", "images/champions/taliyah/taliyah.jpg", "mago", ""),
    ("Talon", "images/champions/talon/talon.jpg", "assassino", ""),
    ("Taric", "images/champions/taric/taric.jpg", "suporte", "lutador"),
    ("Teemo", "images/champions/teemo/teemo.jpg", "assassino", "atirador"),
    ("Thresh", "images/champions/thresh/thresh.jpg", "suporte", ""),
    ("Tristana", "images/champions/tristana/tristana.jpg", "atirador", "assassino"),
    ("Trundle", "images/champions/trundle/trundle.jpg", "lutador", "tanque"),
    ("Tryndamere", "images/champions/tryndamere/tryndamere.jpg", "lutador", "assassino"),
    ("Twisted Fate", "images/champions/twistedfate/twistedfate.jpg", "mago", ""),
    ("Twitch", "images/champions/twitch/twitch.jpg", "atirador", "assassino"),
	("Udyr", "images/champions/udyr/udyr.jpg", "lutador", "tanque"),
    ("Urgot", "images/champions/urgot/urgot.jpg", "lutador", "tanque"),
    ("Varus", "images/champions/varus/varus.jpg", "atirador", "mago"),
    ("Vayne", "images/champions/vayne/vayne.jpg", "atirador", "assassino"),
    ("Veigar", "images/champions/veigar/veigar.jpg", "mago", ""),
    ("Vel'koz", "images/champions/velkoz/velkoz.jpg", "mago", ""),
    ("Vi", "images/champions/vi/vi.jpg", "lutador", "assassino"),
    ("Viego", "images/champions/viego/viego.jpg", "lutador", "lutador"),
    ("Viktor", "images/champions/viktor/viktor.jpg", "mago", ""),
    ("Vladimir", "images/champions/vladimir/vladimir.jpg", "mago", ""),
	("Volibear", "images/champions/volibear/volibear.png", "lutador", "tanque"),
    ("Warwick", "images/champions/warwick/warwick.jpg", "lutador", "tanque"),
    ("Wukong", "images/champions/wukong/wukong.jpg", "lutador", "tanque"),
    ("Xayah", "images/champions/xayah/xayah.jpg", "atirador", ""),
    ("Xerath", "images/champions/xerath/xerath.jpg", "mago", ""),
    ("Xin Zhao", "images/champions/xinzhao/xinzhao.jpg", "lutador", "assassino"),
    ("Yasuo", "images/champions/yasuo/yasuo.jpg", "lutador", "assassino"),
    ("Yone", "images/champions/yone/yone.png", "lutador", "assassino"),
    ("Yorick", "images/champions/yorick/yorick.jpg", "lutador", "tanque"),
    ("Yuumi", "images/champions/yuumi/yuumi.jpg", "suporte", "mago"),
	("Zac", "images/champions/zac/zac.jpg", "tanque", "lutador"),
    ("Zed", "images/champions/zed/zed.jpg", "assassino", ""),
    ("Ziggs", "images/champions/ziggs/ziggs.jpg", "mago", ""),
    ("Zilean", "images/champions/zilean/zilean.jpg", "suporte", "mago"),
    ("Zoe", "images/champions/zoe/zoe.jpg", "mago", "suporte"),
    ("Zyra", "images/champions/zyra/zyra.jpg", "mago", "suporte");
    
insert into estatisticas_base
VALUES
	("Aatrox", 175, "175%", "60 - 145", 345, "32 - 53.25", "N/A", "N/A", "38 - 93.25", "0.651", "0 - 42.5%", "3 - 20", "580 - 2110"),
    ("Ahri", 550, "175%", "53 - 104", 330, "30 - 38.5", "8 - 21.6", "418 - 843", "21 - 80.5", "0.668", "0 - 34%", "5.5 - 15.7", "526 - 2090"),
    ("Akali", 125, "175%", "62 - 118.1", 345, "37 - 58.25", "50", "200", "23 - 82.5", "0.625", "0 - 54.4%", "8 - 16.5", "575 - 2190");
    
update campeao set data_lancamento="2013-06-13", dificuldade_campeao="Moderado", tipo_dano="Físico", 
tipo_alcance="Corpo a Corpo", preco_campeao_ea=4800, preco_campeao_rp=880, rota_sugerida="Top Lane"
WHERE nome_campeao="Aatrox";

update campeao set historia_campeao="Antes defensores honrados de Shurima contra o temido Vazio, Aatrox e seus
 irmãos acabaram se tornando uma ameaça ainda maior para Runeterra, e a única coisa capaz de derrotá-los foi
 um tipo de feitiçaria mortal e traiçoeira. Mas após séculos de encarceramento, Aatrox foi o primeiro a encontrar
 a liberdade novamente, e ele saiu corrompendo e transformando quem fosse tolo o suficiente de tentar tocar na arma
 mágica que continha sua essência. Agora, com um corpo roubado, ele vaga por Runeterra transfigurado, em uma
 versão bizarra da sua forma anterior, buscando uma vingança apocalíptica."
 WHERE nome_campeao="Aatrox";
 
update campeao set data_lancamento="2010-05-11", dificuldade_campeao="Moderado", tipo_dano="Físico", 
tipo_alcance="Corpo a Corpo", preco_campeao_ea=3150, preco_campeao_rp=790, rota_sugerida="Mid Lane"
WHERE nome_campeao="Akali";

update campeao set historia_campeao="Abandonando a Ordem Kinkou e seu título de Punho das Sombras, Akali agora ataca
 sozinha, pronta para ser a arma mortal que seu povo precisa. Embora ela mantenha tudo o que aprendeu com seu mestre
 Shen, ela se comprometeu a defender Ionia de seus inimigos, um assassinato de cada vez. Akali pode atacar em silêncio,
 mas sua mensagem será ouvida em voz alta e clara: Temam a assassina sem mestre."
WHERE nome_campeao="Akali";

update campeao set data_lancamento="2011-12-14", dificuldade_campeao="Moderado", tipo_dano="Mágico", 
tipo_alcance="À Distância", preco_campeao_ea=4800, preco_campeao_rp=880, rota_sugerida="Mid Lane"
WHERE nome_campeao="Ahri";

update campeao set historia_campeao="Com uma conexão inata com o poder latente de Runeterra, Ahri é uma vastaya capaz de
 transformar magia em orbes de pura energia. Ela gosta de brincar com suas presas manipulando suas emoções antes de devorar
 suas essências vitais. Apesar de sua natureza predatória, Ahri conserva um senso de empatia ao receber flashes de memória
 das almas que ela consome."
WHERE nome_campeao="Ahri";


-- show tables;
-- drop database lolwiki;