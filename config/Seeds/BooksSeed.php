<?php
use Migrations\AbstractSeed;

/**
 * Books seed.
 */
class BooksSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
          ['id'=>1, 'shelf_id'=>3,'title'=>'1966 - Oracle: SQL, PL/SQL e administração',
          'author'=>'MORELLI, Eduardo M. Terra','editor'=>'São Paulo: Érica, 2000','pages'=>346,
          'quantity'=>1,'classification'=>'005.75 M842o'],

          ['id'=>2, 'shelf_id'=>3,'title'=>'3D Studio MAX 3: fundamentos',
          'author'=>'PETERSON, Michael Todd','editor'=>'Campus, 2000. x','pages'=>541,
          'quantity'=>4,'classification'=>'006.68 P485t'],

          ['id'=>3, 'shelf_id'=>3,'title'=>'500 dicas e macetes para PC',
          'author'=>'VASCONCELOS, Laércio','editor'=>'Makron, 1999. v.','pages'=>0,
          'quantity'=>1,'classification'=>'004.16 V331q'],

          ['id'=>4, 'shelf_id'=>3,'title'=>'A arte de escrever programas legíveis : técnicas simples e práticas para a elaboração de programas fáceis de serem lidos eentendidos',
          'author'=>'BOSWELL, Dustin','editor'=>'Novatec, 2012','pages'=>211,
          'quantity'=>8,'classification'=>'005.13 B747a'],

          ['id'=>5, 'shelf_id'=>3,'title'=>'A linguagem de programação C++',
          'author'=>'STROUSTRUP, Bjarne','editor'=>'3. ed. Porto Alegre: Bookman, 2000','pages'=>823,
          'quantity'=>1,'classification'=>'005.133 S925l'],

          ['id'=>7, 'shelf_id'=>3,'title'=>'Adobe Photoshop 5',
          'author'=>'MINK, Carlos; MAZZETTI, Gerardo','editor'=>'São Paulo, 1999','pages'=>246,
          'quantity'=>1,'classification'=>'006.6869 M665a'],

          ['id'=>8, 'shelf_id'=>3,'title'=>'Advances in artificial intelligence: 13th Brazilian Symposium on Artificial Intelligence',
          'author'=>'BORGES, Díbio L.; KAESTNER, Celso Antônio Alves','editor'=>'Curitiba, Brazil, October 23-25, 1996','pages'=>241,
          'quantity'=>6,'classification'=>'AN 006.3 A244a'],

          ['id'=>9, 'shelf_id'=>3,'title'=>'Ajax com jQuery: requisições Ajax com a simplicidade de jQuery',
          'author'=>'SILVA, Maurício Samy','editor'=>'Novatec, 2009','pages'=>327,
          'quantity'=>12,'classification'=>'005.133 S586a'],

          ['id'=>10, 'shelf_id'=>3,'title'=>'Ajax em ação',
          'author'=>'CRANE, Dave','editor'=>'Pearson Prentice Hall, 2007','pages'=>452,
          'quantity'=>7,'classification'=>'005.133 C891a'],

          ['id'=>11, 'shelf_id'=>3,'title'=>'Ajax, rich internet aplications e desenvolvimento web para programadores',
          'author'=>'DEITEL, Paul J.; DEITEL, Harvey M.','editor'=>'São Paulo: Pearson Prentice Hall, 2008. xxiv','pages'=>747,
          'quantity'=>3,'classification'=>'005.133 D325a'],

          ['id'=>12, 'shelf_id'=>3,'title'=>'Algoritmos e lógica de programação',
          'author'=>'SOUZA, Marco Antonio de; GOMES, Marcelo Marques; SOARES, Marcio Vieira; CONCILIO, Ricardo','editor'=>'São Paulo: Thomson, Cengage Learning, 2006','pages'=>212,
          'quantity'=>12,'classification'=>'005.1 A394a'],

          ['id'=>14, 'shelf_id'=>3,'title'=>'Algoritmos: fundamento e prática',
          'author'=>'ARAÚJO, Everton Coimbra de','editor'=>'Visual Books, 2007','pages'=>414,
          'quantity'=>17,'classification'=>'005.113 A663a'],

          ['id'=>15, 'shelf_id'=>3,'title'=>'Algoritmos: teoria e prática',
          'author'=>'CORMEN, Thomas H','editor'=>'Rio de Janeiro, RJ: Elsevier, 2012','pages'=>926,
          'quantity'=>3,'classification'=>'005.1 A396a'],

          ['id'=>16, 'shelf_id'=>3,'title'=>'An introduction to parallel programming',
          'author'=>'PACHECO, Peter S','editor'=>'Morgan Kaufmann, c2011. xix','pages'=>370,
          'quantity'=>7,'classification'=>'005.275 P116i'],

          ['id'=>17, 'shelf_id'=>3,'title'=>'Análise e projeto de sistemas de informação orientados a objetos',
          'author'=>'WAZLAWICK, Raul Sidnei','editor'=>'Elsevier, 2011','pages'=>330,
          'quantity'=>8,'classification'=>'005.117 W359a'],

          ['id'=>18, 'shelf_id'=>3,'title'=>'Analog interfacing to embedded microprocessors: real world design',
          'author'=>'BALL, Stuart R','editor'=>'Newnes, 2004. xi','pages'=>322,
          'quantity'=>2,'classification'=>'004.61 B187a'],

          ['id'=>19, 'shelf_id'=>3,'title'=>'Android cookbook',
          'author'=>'DARWIN, Ian F','editor'=>'Novatec, 2012','pages'=>668,
          'quantity'=>5,'classification'=>'005.26 D228a'],

          ['id'=>20, 'shelf_id'=>3,'title'=>'API design for C++',
          'author'=>'REDDY, Martin','editor'=>'','pages'=>0,
          'quantity'=>2,'classification'=>'005.133 R313a'],

          ['id'=>21, 'shelf_id'=>3,'title'=>'Aplicações móveis: arquitetura, projeto e desenvolvimento',
          'author'=>'LEE, Valentino; SCHNEIDER, Heather; SCHELL, Robbie','editor'=>'PearsonEducation do Brasil, 2005. xviii','pages'=>328,
          'quantity'=>7,'classification'=>'004.2 L481a'],

          ['id'=>22, 'shelf_id'=>3,'title'=>'Aprendendo Active Server Pages 3',
          'author'=>'CHASE, Nicholas','editor'=>'Makron Books do Brasil, c2000','pages'=>406,
          'quantity'=>1,'classification'=>'005.369 C487a'],

          ['id'=>24, 'shelf_id'=>3,'title'=>'Aprendendo Cocoa com objetive-C: desenvolvendo para Mac e iOS App Stores',
          'author'=>'BUTTFIELD-ADDISON, Paris; MANNING, Jonathon','editor'=>'Novatec, 2013','pages'=>364,
          'quantity'=>5,'classification'=>'005.265 A226a'],

          ['id'=>25, 'shelf_id'=>3,'title'=>'Aprendendo JavaScript',
          'author'=>'POWERS, Shelley','editor'=>'Novatec, Califórnia, USA: O Reilly, 2010','pages'=>407,
          'quantity'=>7,'classification'=>'005.133 P887j'],

          ['id'=>26, 'shelf_id'=>3,'title'=>'Aprendendo SQL',
          'author'=>'BEAULIEU, Alan','editor'=>'Novatec, 2010','pages'=>365,
          'quantity'=>3,'classification'=>'005.133 B377a'],

          ['id'=>27, 'shelf_id'=>3,'title'=>'Arquitetura de computadores pessoais',
          'author'=>'WEBER, Raul Fernando','editor'=>'Sagra Luzzatto, 2000-2001','pages'=>271,
          'quantity'=>1,'classification'=>'004.22 W375a'],

          ['id'=>28, 'shelf_id'=>3,'title'=>'Arquitetura de computadores: de microprocessadores a supercomputadores',
          'author'=>'PARHAMI, Behrooz','editor'=>'McGraw-Hill, 2008','pages'=>560,
          'quantity'=>5,'classification'=>'004.22 P229a'],

          ['id'=>29, 'shelf_id'=>3,'title'=>'Arquitetura e organização de computadores',
          'author'=>'STALLINGS, William','editor'=>'São Paulo, SP: Prentice-Hall, 2010','pages'=>624,
          'quantity'=>9,'classification'=>'004.22 S782a'],

          ['id'=>32, 'shelf_id'=>3,'title'=>'Banco de dados: projeto e implementação',
          'author'=>'MACHADO, Felipe Nery Rodrigues','editor'=>'Érica, 2008','pages'=>398,
          'quantity'=>5,'classification'=>'005.74 M149b'],

          ['id'=>33, 'shelf_id'=>3,'title'=>'BrOffice da teoria à prática',
          'author'=>'COSTA, Edgard Alves','editor'=>'Rio de Janeiro, RJ: Brasport, 2007. viii','pages'=>192,
          'quantity'=>3,'classification'=>'005.3 C837b'],

          ['id'=>34, 'shelf_id'=>3,'title'=>'C, completo e total',
          'author'=>'SCHILDT, Herbert','editor'=>'São Paulo, SP: Makron, c1997. xv','pages'=>827,
          'quantity'=>23,'classification'=>'005.133 S334'],

          ['id'=>35, 'shelf_id'=>3,'title'=>'C# como programar',
          'author'=>'DEITEL, Harvey M.; DEITEL, Paul J.','editor'=>'São Paulo: Makron Books, 2003. xliii','pages'=>1153,
          'quantity'=>3,'classification'=>'005.133 D325c'],

          ['id'=>36, 'shelf_id'=>3,'title'=>'C++ absoluto',
          'author'=>'SAVITCH, Walter J','editor'=>'Addison Wesley, 2004. ix','pages'=>612,
          'quantity'=>2,'classification'=>'005.133 S267a'],

          ['id'=>246, 'shelf_id'=>3,'title'=>'Ciência da Computação',
          'author'=>'Brookshear, J. Glenn','editor'=>'Porto Alegre. Bookman, 2013','pages'=>561,
          'quantity'=>12,'classification'=>'004 B873c'],

          ['id'=>241, 'shelf_id'=>3,'title'=>'Complexidade de Algoritmos',
          'author'=>'TOSCANI, Laira Viera','editor'=>'Porto Alegre, Bookman, 2012','pages'=>262,
          'quantity'=>7,'classification'=>'005.113 T713c'],

          ['id'=>37, 'shelf_id'=>3,'title'=>'Computação evolucionária em problemas de engenharia',
          'author'=>'LOPES, Heitor Silvério; TAKAHASHI, Ricardo H. C. (Ed.).','editor'=>'Curitiba, PR: Omnipax, 2011','pages'=>385,
          'quantity'=>1,'classification'=>'006.3 C738c'],

          ['id'=>38, 'shelf_id'=>3,'title'=>'Computer networks: a systems approach',
          'author'=>'PETERSON, Larry L; DAVIE, Bruce S','editor'=>'Elsevier, c2012. xxxi','pages'=>884,
          'quantity'=>2,'classification'=>'004.6 P485c'],

          ['id'=>39, 'shelf_id'=>3,'title'=>'Conceitos de linguagens de programação',
          'author'=>'SEBESTA, Robert W','editor'=>'Bookman, 2003','pages'=>638,
          'quantity'=>5,'classification'=>'005.13 S443c'],

          ['id'=>40, 'shelf_id'=>3,'title'=>'Construindo aplicações web com PHP e MySQL',
          'author'=>'MILANI, André','editor'=>'Novatec, c2010','pages'=>336,
          'quantity'=>12,'classification'=>'005.133 M637c'],

          ['id'=>41, 'shelf_id'=>3,'title'=>'Construindo aplicativos móveis com C#',
          'author'=>'SHACKLES, Greg; SANTOS, Luis Euclides','editor'=>'Novatec, 2012','pages'=>200,
          'quantity'=>3,'classification'=>'005.133 S524c'],

          ['id'=>42, 'shelf_id'=>3,'title'=>'Construindo aplicativos móveis com Java',
          'author'=>'MARINACCI, Joshua; SANTOS, Luis Euclides.','editor'=>'São Paulo: Novatec, 2012','pages'=>103,
          'quantity'=>7,'classification'=>'005.133 M337c'],

          ['id'=>43, 'shelf_id'=>3,'title'=>'Construindo sites com CSS e (X)HTML: sites controlados por folhas de estilo em cascata',
          'author'=>'SILVA, Maurício Samy','editor'=>'Novatec, 2008','pages'=>446,
          'quantity'=>10,'classification'=>'005.133 S586co'],

          ['id'=>44, 'shelf_id'=>3,'title'=>'Core Java',
          'author'=>'HORSTMANN, Cay S.; CORNELL, Gary','editor'=>'São Paulo: Pearson, c2010. xiii, v.','pages'=>0,
          'quantity'=>7,'classification'=>'005.133 H819c'],

          ['id'=>45, 'shelf_id'=>3,'title'=>'Core Python programming',
          'author'=>'CHUN, Wesley','editor'=>'Prentice Hall, 2007. xxxvii','pages'=>1099,
          'quantity'=>3,'classification'=>'005.133 C559c'],

          ['id'=>240, 'shelf_id'=>3,'title'=>'Criando Sites com HTML',
          'author'=>'Mauricio Samy Silva','editor'=>'São Paulo, SP : Novatec, 2008','pages'=>431,
          'quantity'=>7,'classification'=>'005.133 S586c'],

          ['id'=>46, 'shelf_id'=>3,'title'=>'Criptografia e segurança de redes: princípios e práticas',
          'author'=>'STALLINGS, William','editor'=>'Pearson Prentice Hall, 2008. xvii','pages'=>492,
          'quantity'=>7,'classification'=>'005.82 S782c'],

          ['id'=>47, 'shelf_id'=>3,'title'=>'CSS avançado',
          'author'=>'LEWIS, Joseph R.; MOSCOVITZ, Meitar.','editor'=>'São Paulo: Novatec, 2010','pages'=>413,
          'quantity'=>3,'classification'=>'005.133 L673c'],

          ['id'=>48, 'shelf_id'=>3,'title'=>'CSS3: desenvolva aplicações web profissionais com uso dos poderosos recursos de estilização das CSS3',
          'author'=>'SILVA, Maurício Samy','editor'=>'Novatec, 2012','pages'=>489,
          'quantity'=>7,'classification'=>'004.678 S586c'],

          ['id'=>49, 'shelf_id'=>3,'title'=>'CUDA by example: an introduction to general-purpose GPU programming',
          'author'=>'SANDERS, Jason; KANDROT, Edward','editor'=>'Addison-Wesley, 2011. xix','pages'=>290,
          'quantity'=>2,'classification'=>'005.2 S215c'],

          ['id'=>50, 'shelf_id'=>3,'title'=>'Data warehouse',
          'author'=>'OLIVEIRA, Wilson José de','editor'=>'Visual Books, 2002','pages'=>188,
          'quantity'=>1,'classification'=>'005.74 O48d'],

          ['id'=>243, 'shelf_id'=>3,'title'=>'Date introdução a Sistemas de Bancos de Dados',
          'author'=>'Date, C. J.','editor'=>'Rio de Jaineiro, RJ. Elsevier, 2004','pages'=>865,
          'quantity'=>5,'classification'=>'005.74 D232i'],

          ['id'=>51, 'shelf_id'=>3,'title'=>'Delphi 5: cliente-servidor e internet',
          'author'=>'FERNANDES, André','editor'=>'Book Express, 2000','pages'=>231,
          'quantity'=>1,'classification'=>'005.369 F363d'],

          ['id'=>52, 'shelf_id'=>3,'title'=>'Delphi APIs & sockets: a caixa preta das tecnologias',
          'author'=>'CAMARA, Fábio; NOVAES, Hugo','editor'=>'Visual Books, 2000','pages'=>224,
          'quantity'=>1,'classification'=>'005.369 C172de'],

          ['id'=>53, 'shelf_id'=>3,'title'=>'Delphi for Windows 95 and Windows NT: developers guide',
          'author'=>'BORLAND','editor'=>'Scotts Valley: Borland International, c 1997','pages'=>0,
          'quantity'=>1,'classification'=>'005.133 B735b'],

          ['id'=>54, 'shelf_id'=>3,'title'=>'Descobrindo o Linux: entenda o sistema operacional GNU/Linux',
          'author'=>'MOTA FILHO, João Eriberto','editor'=>'Novatec, 2012','pages'=>924,
          'quantity'=>5,'classification'=>'005.43 M917d'],

          ['id'=>55, 'shelf_id'=>3,'title'=>'Desenvolvendo aplicações com UML 2.2: do conceitual à implementação',
          'author'=>'MELO, Cristina Ana','editor'=>'Rio de Janeiro: Brasport, 2010','pages'=>320,
          'quantity'=>2,'classification'=>'005.117 M528d'],

          ['id'=>56, 'shelf_id'=>3,'title'=>'Desenvolvendo aplicativos com Visual Basic e UML',
          'author'=>'REED, Paul R','editor'=>'São Paulo: Makron Books do Brasil, 2000','pages'=>462,
          'quantity'=>4,'classification'=>'005.17 R323d'],

          ['id'=>57, 'shelf_id'=>3,'title'=>'Desenvolvendo websites com PHP',
          'author'=>'NIEDERAUER, Juliano','editor'=>'Novatec, 2011','pages'=>301,
          'quantity'=>7,'classification'=>'005.133 N666d'],

          ['id'=>58, 'shelf_id'=>3,'title'=>'Desenvolvimento de grandes aplicações web',
          'author'=>'LOUDON, Kyle','editor'=>'Novatec, 2010','pages'=>325,
          'quantity'=>3,'classification'=>'004.67 L886d'],

          ['id'=>59, 'shelf_id'=>3,'title'=>'Desenvolvimento de software com scrum: aplicando métodos ágeis com sucesso',
          'author'=>'COHN, Mike','editor'=>'Porto Alegre: Bookman, 2011','pages'=>496,
          'quantity'=>2,'classification'=>'005.1 C678d 2011'],

          ['id'=>60, 'shelf_id'=>3,'title'=>'Designing embedded hardware',
          'author'=>'CATSOULIS, John','editor'=>'O Reilly, c2005. xvi','pages'=>377,
          'quantity'=>7,'classification'=>'004.16 C367d'],

          ['id'=>61, 'shelf_id'=>3,'title'=>'Dicionário de informática & internet: inglês - português',
          'author'=>'SAWAYA, Márcia Regina','editor'=>'Nobel, 1999','pages'=>543,
          'quantity'=>1,'classification'=>'R 004.03'],

          ['id'=>62, 'shelf_id'=>3,'title'=>'Do Fortran à Internet: no rastro da trilogia educação, pesquisa e desenvolvimento',
          'author'=>'PACITTI, Tércio','editor'=>'Makron, c2000','pages'=>453,
          'quantity'=>1,'classification'=>'005.133 P118d'],

          ['id'=>63, 'shelf_id'=>3,'title'=>'Dominando PHP e MySQL: do iniciante ao profissional',
          'author'=>'GILMORE, W. Jason','editor'=>'Rio de Janeiro, RJ: Alta Books, 2008','pages'=>769,
          'quantity'=>1,'classification'=>'005.133 G488d'],

          ['id'=>64, 'shelf_id'=>3,'title'=>'Elementos de programação em C',
          'author'=>'PINHEIRO, Francisco A. C','editor'=>'Porto Alegre: Bookman, 2012. xx','pages'=>528,
          'quantity'=>7,'classification'=>'005 P654e'],

          ['id'=>65, 'shelf_id'=>3,'title'=>'Embedded microcontrollers and processor design',
          'author'=>'OSBORN, Greg','editor'=>'Prentice-Hall, c2010. xx','pages'=>431,
          'quantity'=>1,'classification'=>'004.16 O81e'],

          ['id'=>66, 'shelf_id'=>3,'title'=>'Embedded system design',
          'author'=>'MARWEDEL, Peter','editor'=>'Kluwer Academic, 2006. xvii','pages'=>241,
          'quantity'=>2,'classification'=>'004.21 M298e'],

          ['id'=>67, 'shelf_id'=>3,'title'=>'Embedded systems design: an introduction to processes, tools, and techniques',
          'author'=>'BERGER, Arnold','editor'=>'CMP Books, c2002. xxviii','pages'=>237,
          'quantity'=>2,'classification'=>'005.43 B496e'],

          ['id'=>68, 'shelf_id'=>3,'title'=>'Embedded systems: world class designs',
          'author'=>'GANSSLE, Jack','editor'=>'Newnes/Elsevier, c2008. xviii','pages'=>563,
          'quantity'=>2,'classification'=>'005.43 E53'],

          ['id'=>69, 'shelf_id'=>3,'title'=>'Engenharia de software',
          'author'=>'SOMMERVILLE, Ian','editor'=>'São Paulo: Pearson Addison-Wesley, 2003. xiv','pages'=>592,
          'quantity'=>1,'classification'=>'005.1 S697e'],

          ['id'=>70, 'shelf_id'=>3,'title'=>'Engenharia de software',
          'author'=>'PRESSMAN, Roger S','editor'=>'São Paulo, SP: Makron, c1995','pages'=>1056,
          'quantity'=>1,'classification'=>'005.1 P935e'],

          ['id'=>244, 'shelf_id'=>3,'title'=>'Engenharia de Software',
          'author'=>'HIRAMA, Kechi','editor'=>'Rio de Janeiro, RJ. Elsevier, 2011','pages'=>210,
          'quantity'=>7,'classification'=>'005.1 H668e'],

          ['id'=>71, 'shelf_id'=>3,'title'=>'Engenharia de software na prática',
          'author'=>'ENGHOLM JÚNIOR, Hélio','editor'=>'São Paulo, SP: Novatec, 2010','pages'=>438,
          'quantity'=>7,'classification'=>'005.1 E57e'],

          ['id'=>72, 'shelf_id'=>3,'title'=>'Entendendo e dominando o hardware: técnicas avançadas para montagem e manutenção de PCs',
          'author'=>'LACERDA, Ivan Max Freire','editor'=>'Digerati Books, 2007','pages'=>238,
          'quantity'=>2,'classification'=>'004.7 L131e'],

          ['id'=>73, 'shelf_id'=>3,'title'=>'Enterprise JavaBeans 3',
          'author'=>'BURKE, Bill; MONSON-HAEFEL, Richard','editor'=>'Pearson Prentice Hall, 2007. xvii','pages'=>538,
          'quantity'=>3,'classification'=>'005.133 B959e'],

          ['id'=>74, 'shelf_id'=>3,'title'=>'Estrutura de dados e algoritmos em C++',
          'author'=>'DROZDEK, Adam','editor'=>'Cengage Learning, c2002. xviii','pages'=>579,
          'quantity'=>7,'classification'=>'005.73 D793e'],

          ['id'=>75, 'shelf_id'=>3,'title'=>'Estrutura de dados fundamentais: conceitos e aplicações',
          'author'=>'PEREIRA, Silvio do Lago','editor'=>'São Paulo: Érica, 2008','pages'=>264,
          'quantity'=>5,'classification'=>'005.73 P436e'],

          ['id'=>76, 'shelf_id'=>3,'title'=>'Estruturas de dados e algoritmos: padrões de projetos orientados a objetos com Java',
          'author'=>'PREISS, Bruno R','editor'=>'Campus, c2001. xvi','pages'=>566,
          'quantity'=>7,'classification'=>'005.73 P924e'],

          ['id'=>77, 'shelf_id'=>3,'title'=>'Estruturas de dados usando C',
          'author'=>'TENENBAUM, Aaron M.; LANGSAM, Yedidyah; AUGENSTEIN, Moshe','editor'=>'São Paulo, SP: Pearson Makron Books, c1995. xx','pages'=>884,
          'quantity'=>9,'classification'=>'005.73 T292e'],

          ['id'=>78, 'shelf_id'=>3,'title'=>'Estudo dirigido de informática básica',
          'author'=>'MANZANO, André Luiz N. G.; MANZANO, Maria Izabel N.G.','editor'=>'São Paulo: Érica, 2007','pages'=>250,
          'quantity'=>5,'classification'=>'004.07 M296e'],

          ['id'=>79, 'shelf_id'=>3,'title'=>'Estudo dirigido de linguagem C',
          'author'=>'MANZANO, José Augusto N. G','editor'=>'São Paulo: Érica, 2007. 214 p.','pages'=>214,
          'quantity'=>5,'classification'=>'005.133 M296l'],

          ['id'=>80, 'shelf_id'=>3,'title'=>'Excel para engenheiros: incluindo VBA',
          'author'=>'GÓMEZ, Luis Alberto','editor'=>'Visual Books, 2009','pages'=>222,
          'quantity'=>4,'classification'=>'005.36 G633e'],

          ['id'=>81, 'shelf_id'=>3,'title'=>'Expressões regulares: uma abordagem divertida',
          'author'=>'JARGAS, Aurélio Marinho','editor'=>'Novatec, 2012.','pages'=>223,
          'quantity'=>5,'classification'=>'005.115 J37e'],

          ['id'=>82, 'shelf_id'=>3,'title'=>'Faça um site HTML 4.0: orientado por projeto',
          'author'=>'OLIVIERO, Carlos A. J','editor'=>'São Paulo: Érica, 2002','pages'=>198,
          'quantity'=>1,'classification'=>'005.133 O49f'],

          ['id'=>83, 'shelf_id'=>3,'title'=>'Flash 4: animação na Web',
          'author'=>'MILBURN, Ken; CROTEAU, John T.','editor'=>'São Paulo: Makron Books, 2000','pages'=>377,
          'quantity'=>1,'classification'=>'006.696 M638f'],

          ['id'=>84, 'shelf_id'=>3,'title'=>'Flash 8: criando além da animação',
          'author'=>'MANZI, Fabrício','editor'=>'Érica, 2005','pages'=>444,
          'quantity'=>1,'classification'=>'006.66 M296f'],

          ['id'=>85, 'shelf_id'=>3,'title'=>'Fundamentals of neural networks: architectures,algorithms, and applications',
          'author'=>'FAUSETT, Laurene V','editor'=>'Prentice-Hall, c1994','pages'=>461,
          'quantity'=>7,'classification'=>'006.3 F267f'],

          ['id'=>86, 'shelf_id'=>3,'title'=>'Fundamentos da ciência da computação',
          'author'=>'FOROUZAN, Behrouz A.; MOSHARRAF, Firouz','editor'=>'São Paulo, SP: Cengage Learning, 2012.','pages'=>560,
          'quantity'=>8,'classification'=>'004 F727f'],

          ['id'=>87, 'shelf_id'=>3,'title'=>'Fundamentos da programação de computadores: algoritmos, Pascal, C/C ++ e Java',
          'author'=>'ASCENCIO, Ana Fernanda Gomes; CAMPOS, Edilene Aparecida Veneruchi de','editor'=>'São Paulo: Prentice-Hall, c2008','pages'=>434,
          'quantity'=>8,'classification'=>'005.1 A811f 2'],

          ['id'=>88, 'shelf_id'=>3,'title'=>'Fundamentos de arquitetura de computadores',
          'author'=>'WEBER, Raul Fernando','editor'=>'Bookman, 2012','pages'=>400,
          'quantity'=>5,'classification'=>'004.22 W375f'],

          ['id'=>89, 'shelf_id'=>3,'title'=>'Fundamentos de computação e orientação a objetos usando Java',
          'author'=>'PINHEIRO, Francisco A. C.','editor'=>'Rio de Janeiro, RJ: 2006','pages'=>465,
          'quantity'=>5,'classification'=>'005.133 P654f'],

          ['id'=>90, 'shelf_id'=>3,'title'=>'Fundamentos de PHP',
          'author'=>'MELONI, Julie C','editor'=>'Ciência Moderna, 2000. xi','pages'=>352,
          'quantity'=>1,'classification'=>'005.133 M528f'],

          ['id'=>91, 'shelf_id'=>3,'title'=>'Fundamentos matemáticos para a ciência da computação: um tratamento moderno de matemática discreta',
          'author'=>'GERSTING, Judith L','editor'=>'LTC, 2004. xiv','pages'=>597,
          'quantity'=>5,'classification'=>'004.0151 G383fu'],

          ['id'=>92, 'shelf_id'=>3,'title'=>'Gerência de projetos de software: técnicas e ferramentas',
          'author'=>'QUADROS, Moacir','editor'=>'','pages'=>0,
          'quantity'=>1,'classification'=>'004.21 Q1g'],

          ['id'=>93, 'shelf_id'=>3,'title'=>'Google Android: aprenda a criar aplicações para dispositivos móveis com o Android SDK',
          'author'=>'LECHETA, Ricardo R','editor'=>'Novatec, 2013','pages'=>821,
          'quantity'=>5,'classification'=>'005.26 L459g'],

          ['id'=>94, 'shelf_id'=>3,'title'=>'Hardware: o guia definitivo',
          'author'=>'MORIMOTO, Carlos E','editor'=>'Sul Editores, 2007','pages'=>847,
          'quantity'=>5,'classification'=>'004.7 M854h'],

          ['id'=>95, 'shelf_id'=>3,'title'=>'HTML 4 & CSS 2: Manual completo',
          'author'=>'CARVALHO, Alan','editor'=>'Rio de Janeiro, RJ: Book Express, c2000','pages'=>335,
          'quantity'=>1,'classification'=>'005.133 C331h'],

          ['id'=>96, 'shelf_id'=>3,'title'=>'HTML 5: a linguagem de marcação que revolucionou a Web',
          'author'=>'SILVA, Maurício Samy','editor'=>'Novatec, 2011','pages'=>320,
          'quantity'=>7,'classification'=>'005.133 S586h'],

          ['id'=>245, 'shelf_id'=>3,'title'=>'Informática Novas Aplicações com MicroComputadores',
          'author'=>'MEIRELLES, Fernando de Souza','editor'=>'São Paulo, SP. Makron, 1994','pages'=>615,
          'quantity'=>1,'classification'=>'004 M514p'],

          ['id'=>97, 'shelf_id'=>3,'title'=>'Informática: conceitos e aplicações',
          'author'=>'MARÇULA, Marcelo; BENINI FILHO, Pio Armando','editor'=>'Érica, 2008','pages'=>406,
          'quantity'=>2,'classification'=>'004 M322i'],

          ['id'=>98, 'shelf_id'=>3,'title'=>'Informática terminologia básica: Windows XP, Word XP, Excel XP',
          'author'=>'SILVA, Mário Gomes da','editor'=>'Érica, 2003','pages'=>294,
          'quantity'=>1,'classification'=>'005 S586i'],

          ['id'=>99, 'shelf_id'=>3,'title'=>'Inteligência artificial em controle e automação',
          'author'=>'NASCIMENTO JÚNIOR, Cairo Lúcio; YONEYAMA, Takashi','editor'=>'Edgard Blucher,FAPESP, 2000','pages'=>218,
          'quantity'=>7,'classification'=>'006.3 N244i'],

          ['id'=>100, 'shelf_id'=>3,'title'=>'Inteligência artificial: noções gerais',
          'author'=>'FERNANDES, Anita Maria da Rocha','editor'=>'Visual Books, 2003','pages'=>160,
          'quantity'=>7,'classification'=>'006.3 F363i'],

          ['id'=>101, 'shelf_id'=>3,'title'=>'Interação humano-computador',
          'author'=>'BARBOSA, Simone Diniz Junqueira','editor'=>'Elsevier, 2010','pages'=>384,
          'quantity'=>3,'classification'=>'004.019 B238i'],

          ['id'=>102, 'shelf_id'=>3,'title'=>'InterBase server: for windows 95 & windows NT: getting started',
          'author'=>'BORLAND','editor'=>'USA: Borland International, 1995','pages'=>0,
          'quantity'=>1,'classification'=>'004.65 B735b'],

          ['id'=>103, 'shelf_id'=>3,'title'=>'Interdisciplinaridade na prática: a disciplina de informática na formação do técnico em agropécuária frente aos arranjos produtivos locais',
          'author'=>'FREITAS JÚNIOR, Vanderlei','editor'=>'Opção, 2011','pages'=>88,
          'quantity'=>1,'classification'=>'004.07 F866i'],

          ['id'=>104, 'shelf_id'=>3,'title'=>'Interligação de redes com TCP/IP',
          'author'=>'COMER,Douglas E','editor'=>'Campus, c2006. 2 v','pages'=>884,
          'quantity'=>2,'classification'=>'004.6 C732i'],

          ['id'=>105, 'shelf_id'=>3,'title'=>'Introdução à ciência da computação com jogos: aprendendo a programar com entretenimento',
          'author'=>'FEIJÓ, Bruno; CLUA, Esteban; SILVA, Flávio Soares Corrêa da','editor'=>'Rio de Janeiro, RJ: Elsevier, 2010','pages'=>263,
          'quantity'=>3,'classification'=>'005.1 F297i'],

          ['id'=>106, 'shelf_id'=>3,'title'=>'Introdução à informática para concursos',
          'author'=>'BORGES, Roberto Cabral de Mello; MÓTTOLA, Paulo Renato de Carvalho','editor'=>'Sagra-DCLuzzatto, 1994','pages'=>80,
          'quantity'=>2,'classification'=>'004 B732i'],

          ['id'=>107, 'shelf_id'=>3,'title'=>'Introdução à organização de computadores',
          'author'=>'MONTEIRO, Mário A','editor'=>'LTC, 2007','pages'=>698,
          'quantity'=>5,'classification'=>'004.22 M775i'],

          ['id'=>108, 'shelf_id'=>3,'title'=>'Introdução à pesquisa operacional: métodos e modelos para análise de decisões',
          'author'=>'ANDRADE, Eduardo Leopoldino de','editor'=>'LTC,c2004. xvi','pages'=>204,
          'quantity'=>8,'classification'=>'003 A553i'],

          ['id'=>109, 'shelf_id'=>3,'title'=>'Introdução à programação com Python: algoritmos e lógica de programação para iniciantes',
          'author'=>'MENEZES, Nilo Ney Coutinho','editor'=>'Novatec,2010','pages'=>222,
          'quantity'=>3,'classification'=>'005.133 M543i'],

          ['id'=>110, 'shelf_id'=>3,'title'=>'Introdução à programação orientada a objetos com C++',
          'author'=>'SILVA FILHO, Antonio Mendes da','editor'=>'Elsevier, Campus, 2010','pages'=>283,
          'quantity'=>7,'classification'=>'005.133 S586i'],

          ['id'=>111, 'shelf_id'=>3,'title'=>'Introdução à programação: algoritmos',
          'author'=>'BORATTI, Isaias Camilo; OLIVEIRA, Álvaro Borges de','editor'=>'Visual Books, 2007','pages'=>158,
          'quantity'=>5,'classification'=>'005.73 B726i'],

          ['id'=>112, 'shelf_id'=>3,'title'=>'Introdução ao teste de software',
          'author'=>'DELAMARO, Márcio Eduardo; MALDONADO, José Carlos; JINO, Mario','editor'=>'Elsevier, 2007','pages'=>394,
          'quantity'=>3,'classification'=>'005.14 D336i'],

          ['id'=>113, 'shelf_id'=>3,'title'=>'Json  do iniciante ao profissional',
          'author'=>'GILMORE, W','editor'=>'Rio de Janeiro, RJ: Alta Books, 2008','pages'=>769,
          'quantity'=>1,'classification'=>'005.133 G488d'],

          ['id'=>114, 'shelf_id'=>3,'title'=>'Java: como programar',
          'author'=>'DEITEL, Paul J.; DEITEL, Harvey M','editor'=>'8. ed. São Paulo: Pearson Education do Brasil, 2010. xxix','pages'=>1144,
          'quantity'=>7,'classification'=>'005.133 D325j'],

          ['id'=>115, 'shelf_id'=>3,'title'=>'JavaScript de alto desempenho',
          'author'=>'ZAKAS, Nicholas C','editor'=>'Novatec, 2010','pages'=>245,
          'quantity'=>5,'classification'=>'005.133 Z21j'],

          ['id'=>116, 'shelf_id'=>3,'title'=>'JavaScript: guia do programador',
          'author'=>'SILVA, Maurício Samy','editor'=>'Novatec, 2010.','pages'=>604,
          'quantity'=>7,'classification'=>'005.133 S586js'],

          ['id'=>117, 'shelf_id'=>3,'title'=>'jQuery cookbook',
          'author'=>'Comunidade de desenvolvedores jQuery','editor'=>'Novatec, 2010','pages'=>494,
          'quantity'=>3,'classification'=>'005.133 J89'],

          ['id'=>118, 'shelf_id'=>3,'title'=>'jQuery Mobile: desenvolva aplicações web para dispositivos móveis com HTLM5, CSS3, AJAX, JQuery e jQuery e jQueryUI',
          'author'=>'SILVA, Maurício Samy','editor'=>'Novatec, 2012','pages'=>352,
          'quantity'=>7,'classification'=>'005.133 S586jm'],

          ['id'=>119, 'shelf_id'=>3,'title'=>'jQuery UI: componentes de interface rica para suas aplicações web',
          'author'=>'SILVA, Maurício Samy','editor'=>'Novatec, 2012','pages'=>736,
          'quantity'=>12,'classification'=>'005.133 S586ju'],

          ['id'=>121, 'shelf_id'=>3,'title'=>'Jquery: a biblioteca do programador JavaScript',
          'author'=>'SILVA, Maurício Samy','editor'=>'Novatec, c2010','pages'=>543,
          'quantity'=>9,'classification'=>'005.133 S586jq'],

          ['id'=>122, 'shelf_id'=>3,'title'=>'Laboratórios de tecnologias Cisco em infraestrutura de redes',
          'author'=>'BRITO, Samuel Henrique Bucke','editor'=>'São Paulo, SP: Novatec, 2012','pages'=>159,
          'quantity'=>10,'classification'=>'004.6068 B862L'],

          ['id'=>123, 'shelf_id'=>3,'title'=>'Learning android game programming: a hands-on guide to building your first android game',
          'author'=>'ROGERS, Rick','editor'=>'Addison-Wesley, 2012','pages'=>444,
          'quantity'=>5,'classification'=>'004.16 R728l'],

          ['id'=>124, 'shelf_id'=>3,'title'=>'Linux: guia prático',
          'author'=>'MORIMOTO, Carlos E','editor'=>'Sul Editores, 2010','pages'=>719,
          'quantity'=>5,'classification'=>'005.43 M854l'],

          ['id'=>125, 'shelf_id'=>3,'title'=>'Lógica de programação e estrutura de dados com aplicações em Java',
          'author'=>'PUGA, Sandra; RISSETTI, Gerson','editor'=>'São Paulo: Pearson Prentice Hall, 2009','pages'=>262,
          'quantity'=>2,'classification'=>'005.1 P978l 2'],

          ['id'=>126, 'shelf_id'=>3,'title'=>'Lógica de programação: a construção de algoritmos e estruturas de dados',
          'author'=>'FORBELLONE, André Luiz Villar; EBERSPÄCHER, Henri Frederico','editor'=>'São Paulo: Makron','pages'=>218,
          'quantity'=>10,'classification'=>'005.1 F692L'],

          ['id'=>127, 'shelf_id'=>3,'title'=>'Manual prático de redes: aprenda redes pela lado prático',
          'author'=>'VASCONCELOS, Laércio; VASCONCELOS, Marcelo','editor'=>'Laércio Vasconcelos Computação, 2008','pages'=>499,
          'quantity'=>5,'classification'=>'004.82 V331m'],

          ['id'=>128, 'shelf_id'=>3,'title'=>'Matemática discreta para computação e informática',
          'author'=>'MENEZES, Paulo Blauth','editor'=>'Bookman,2013','pages'=>348,
          'quantity'=>7,'classification'=>'004.0151 M543m'],

          ['id'=>129, 'shelf_id'=>3,'title'=>'Mechanical Desktop 4: guia prático',
          'author'=>'LAZZURI, José Eduardo Cunha','editor'=>'2. ed. São Paulo: Érica, 2002','pages'=>216,
          'quantity'=>1,'classification'=>'006.693 L432m'],

          ['id'=>130, 'shelf_id'=>3,'title'=>'Métodos de ordenação interna: implementação, análise edesempenho em Delphi',
          'author'=>'OLIVEIRA, Álvaro Borges de; PRADA, Adriana; SILVA, Reginaldo Rubens da','editor'=>'Bookstore, 2002','pages'=>116,
          'quantity'=>1,'classification'=>'005.117 O48m'],

          ['id'=>131, 'shelf_id'=>3,'title'=>'Microsoft project 2010: gestão e desenvolvimento de projetos',
          'author'=>'BERNARDES, Maurício Moreira e Silva','editor'=>'Érica, 2010','pages'=>190,
          'quantity'=>7,'classification'=>'005.3 B522m'],

          ['id'=>132, 'shelf_id'=>3,'title'=>'Microsoft Visual Basic 6 para principiantes',
          'author'=>'PIMENTEL, Hercules Gomes','editor'=>'Axcel Books, 2000','pages'=>489,
          'quantity'=>1,'classification'=>'005.133 P644mi'],

          ['id'=>133, 'shelf_id'=>3,'title'=>'Modelagem conceitual e projeto de bancos de dados',
          'author'=>'COUGO, Paulo Sérgio','editor'=>'Rio de Janeiro: Campus, 1997','pages'=>284,
          'quantity'=>5,'classification'=>'005.1 C854m'],

          ['id'=>134, 'shelf_id'=>3,'title'=>'Modelagem de objetos através da UML: the unified modeling language',
          'author'=>'FURLAN, José Davi','editor'=>'São Paulo: Makron, 1998','pages'=>329,
          'quantity'=>1,'classification'=>'005.1 F985m'],

          ['id'=>135, 'shelf_id'=>3,'title'=>'Montagem e configuração de micros: construindo e configurando micros de 32 e 64 bits single core, dual core e quadcore: para usuário s e estudantes',
          'author'=>'VASCONCELOS, Laércio','editor'=>'Laércio Vasconcelos Computação Ltda, 2009','pages'=>312,
          'quantity'=>5,'classification'=>'004.16 V331m'],

          ['id'=>136, 'shelf_id'=>3,'title'=>'MySQL: a bíblia',
          'author'=>'SUEHRING, Steve','editor'=>'Elsevier, c2002','pages'=>674,
          'quantity'=>5,'classification'=>'005.13 S944m'],

          ['id'=>137, 'shelf_id'=>3,'title'=>'Não me faça pensar: uma abordagem de bom senso à usabilidade na web',
          'author'=>'KRUG, Steve','editor'=>'Alta Books, 2008','pages'=>201,
          'quantity'=>1,'classification'=>'004.678 K94na'],

          ['id'=>138, 'shelf_id'=>3,'title'=>'Neural networks for pattern recognition',
          'author'=>'BISHOP, Christopher M','editor'=>'Oxford University, 2002. xvii','pages'=>482,
          'quantity'=>2,'classification'=>'006.3 B622n'],

          ['id'=>139, 'shelf_id'=>3,'title'=>'Notas para exame MCSE: NT Server 4 in the Enterprise',
          'author'=>'KING, Robert; GOVANUS, Gary','editor'=>'Makron, 1999','pages'=>338,
          'quantity'=>1,'classification'=>'005.4476 K54n'],

          ['id'=>140, 'shelf_id'=>3,'title'=>'Notas para exame MCSE: NT Workstation 4',
          'author'=>'GOVANUS, Gary; KING, Robert','editor'=>'Makron, 1999','pages'=>280,
          'quantity'=>1,'classification'=>'005.4476 G721n'],

          ['id'=>141, 'shelf_id'=>3,'title'=>'O bit e o pêndulo: a nova física da informação',
          'author'=>'SIEGFRIED, Tom','editor'=>'Campus, c2000','pages'=>267,
          'quantity'=>1,'classification'=>'004 S571b'],

          ['id'=>142, 'shelf_id'=>3,'title'=>'O mercado de software no Brasil: problemas institucionais e fiscais',
          'author'=>'Conselho de Altos Estudos e Avaliação Tecnológica','editor'=>'Brasília, 2007','pages'=>149,
          'quantity'=>2,'classification'=>'005.1 C755m'],

          ['id'=>143, 'shelf_id'=>3,'title'=>'O processo unificado explicado',
          'author'=>'SCOTT, Kendall','editor'=>'Bookman, 2003','pages'=>160,
          'quantity'=>2,'classification'=>'005.1 S425p'],

          ['id'=>145, 'shelf_id'=>3,'title'=>'O projeto do projeto: da modelagem a implementação.',
          'author'=>'BROOKS JUNIOR, Frederick P','editor'=>'Rio de Janeiro, RJ: Elsevier, 2011','pages'=>407,
          'quantity'=>5,'classification'=>'005.1 B873p'],

          ['id'=>146, 'shelf_id'=>3,'title'=>'Objetos, abstração, estruturas de dados e projeto usando C++',
          'author'=>'KOFFMAN, Elliot B; WOLFGANG, Paul A. T.','editor'=>'Rio de Janeiro: LTC, 2008','pages'=>689,
          'quantity'=>7,'classification'=>'005.117 K78o'],

          ['id'=>147, 'shelf_id'=>3,'title'=>'Oracle 8: SQL, PL/SQL e administração',
          'author'=>'MORELLI, Eduardo M.Terra','editor'=>'São Paulo: Érica, 2000','pages'=>346,
          'quantity'=>1,'classification'=>'005.75 M842o'],

          ['id'=>148, 'shelf_id'=>3,'title'=>'Oracle 8i: dicas & técnicas',
          'author'=>'SCHERER, Douglas; GAYNOR JUNIOR, William; VALENTINSEN, Arlene; CURSETJEE, Xerxes','editor'=>'Campus, 2000','pages'=>518,
          'quantity'=>1,'classification'=>'005.75 O63o'],

          ['id'=>149, 'shelf_id'=>3,'title'=>'Organização básica de computadores e linguagem de montagem',
          'author'=>'PANNAIN, Ricardo; BEHRENS, Frank Herman; PIVA JÚNIOR, Dilermano','editor'=>'Elsevier, 2012','pages'=>408,
          'quantity'=>12,'classification'=>'004.16 P194o'],

          ['id'=>150, 'shelf_id'=>3,'title'=>'Organização estruturada de computadores',
          'author'=>'TANENBAUM, Andrew S','editor'=>'Pearson Prentice Hall, c2007. xii','pages'=>449,
          'quantity'=>7,'classification'=>'004.22 T164o'],

          ['id'=>151, 'shelf_id'=>3,'title'=>'Orientação a objetos na prática: aprendendo orientação a objetos com Java',
          'author'=>'CARDOSO, Caíque','editor'=>'Ciência Moderna, c2006','pages'=>175,
          'quantity'=>5,'classification'=>'005.133 C268o'],

          ['id'=>152, 'shelf_id'=>3,'title'=>'Padrões de design para aplicativos móveis',
          'author'=>'NEIL, Theresa','editor'=>'Novatec, 2012','pages'=>208,
          'quantity'=>5,'classification'=>'005.437 N398m'],

          ['id'=>153, 'shelf_id'=>3,'title'=>'Padrões de projeto: soluções reutilizáveis de software orientado a objetos',
          'author'=>'GAMMA, Erich','editor'=>'Bookman, 2000. xii','pages'=>364,
          'quantity'=>2,'classification'=>'005.12 P124p'],

          ['id'=>154, 'shelf_id'=>3,'title'=>'PageMaker 5 for Windows: guia do usuário',
          'author'=>'MATTHEWS, Martin; MATTHEWS, Carole','editor'=>'Makron, c1994. xxiv','pages'=>570,
          'quantity'=>1,'classification'=>'005.3 M429p'],

          ['id'=>155, 'shelf_id'=>3,'title'=>'Parallel programming: for multicore and cluster systems',
          'author'=>'RAUBER, Thomas; RÜNGER, Gudula','editor'=>'Springer,c2010. x','pages'=>455,
          'quantity'=>2,'classification'=>'005.275 R239p'],

          ['id'=>156, 'shelf_id'=>3,'title'=>'Pattern recognition and neural networks',
          'author'=>'RIPLEY, Brian D','editor'=>'Cambridge University Press, c1996. xi','pages'=>403,
          'quantity'=>2,'classification'=>'006.4 R589p'],

          ['id'=>157, 'shelf_id'=>3,'title'=>'PHP para quem conhece PHP: recursos avançados para a criação de websites dinâmicos',
          'author'=>'NIEDERAUER, Juliano','editor'=>'Novatec, 2008','pages'=>527,
          'quantity'=>1,'classification'=>'004.678 N666p'],

          ['id'=>158, 'shelf_id'=>3,'title'=>'PHP-GTK: criando aplicações aplicações gráficas com PHP',
          'author'=>'DALL OGLIO, Pablo','editor'=>'Novatec, 2012','pages'=>400,
          'quantity'=>3,'classification'=>'005.133 D144p'],

          ['id'=>159, 'shelf_id'=>3,'title'=>'PostgreSQL: guia do programador',
          'author'=>'MILANI, André','editor'=>'Novatec, 2008','pages'=>392,
          'quantity'=>3,'classification'=>'005.133 M637p'],

          ['id'=>160, 'shelf_id'=>3,'title'=>'Practical Modern SCADA Protocols : DNP3, 60870',
          'author'=>'CLARKE, Gordon; REYNDERS, Deon; WRIGHT, Edwin','editor'=>'Newnes, 2004. ix','pages'=>537,
          'quantity'=>2,'classification'=>'004.66 C598p'],

          ['id'=>161, 'shelf_id'=>3,'title'=>'Practical SCADA for industry',
          'author'=>'BAILEY, David; WRIGHT, Edwin','editor'=>'Newnes, 2003. xiv','pages'=>288,
          'quantity'=>2,'classification'=>'004.66 B154p'],

          ['id'=>162, 'shelf_id'=>3,'title'=>'Princípios de análise e projeto de sistemas com UML',
          'author'=>'BEZERRA, Eduardo.','editor'=>'Elsevier, 2007','pages'=>369,
          'quantity'=>7,'classification'=>'005.117 B574p'],

          ['id'=>163, 'shelf_id'=>3,'title'=>'Professional C# programando',
          'author'=>'ROBINSON, Simon et al','editor'=>'Makron Books, Pearson Education, c2004. xxx','pages'=>1124,
          'quantity'=>3,'classification'=>'005.133 P964'],

          ['id'=>164, 'shelf_id'=>3,'title'=>'Professional visual basic: de programador para programador',
          'author'=>'BARWELL, Fred','editor'=>'São Paulo, 2004','pages'=>925,
          'quantity'=>3,'classification'=>'005.133 B296p'],

          ['id'=>165, 'shelf_id'=>3,'title'=>'Programação avançada em C++: 40 novos quebra-cabeças de engenharia, problemas de programação e soluções',
          'author'=>'SUTTER, Herb','editor'=>'Pearson Education do Brasil, 2006','pages'=>289,
          'quantity'=>3,'classification'=>'005.133 S967p'],

          ['id'=>166, 'shelf_id'=>3,'title'=>'Programação em C para o DSPIC: fundamentos',
          'author'=>'SOUZA, Vitor Amadeu','editor'=>'Ensino Profissional, 2008','pages'=>215,
          'quantity'=>2,'classification'=>'005.133 S729p'],

          ['id'=>167, 'shelf_id'=>3,'title'=>'Programação Java em ambiente distribuido: ênfase no mapeamento objeto-relacional com JPA, EJB e Hibernate',
          'author'=>'MENDES, Douglas Rocha','editor'=>'Novatec, 2011','pages'=>495,
          'quantity'=>7,'classification'=>'005.133 M538p'],

          ['id'=>168, 'shelf_id'=>3,'title'=>'Programação Java para a Web',
          'author'=>'LUCKOW, Décio Heinzelmann; MELO, Alexandre Altair de','editor'=>'Novatec, 2010','pages'=>638,
          'quantity'=>5,'classification'=>'005.133 L941p'],

          ['id'=>169, 'shelf_id'=>3,'title'=>'Programação orientada a objetos com java: uma introdução prática usando o BlueJ.',
          'author'=>'BARNES, David J.; KÖLLING, Michael.','editor'=>'4. ed. São Paulo Pearson Prentice Hall, 2009. xxii','pages'=>455,
          'quantity'=>3,'classification'=>'005.117 B261p'],

          ['id'=>170, 'shelf_id'=>3,'title'=>'Programação orientada a objetos em java',
          'author'=>'BORATTI, Isaias Camilo','editor'=>'Visual Books, 2007','pages'=>310,
          'quantity'=>8,'classification'=>'005.117 B727pj'],

          ['id'=>171, 'shelf_id'=>3,'title'=>'Programação orientada a objetos: usando Delphi',
          'author'=>'BORATTI, Isaias Camilo','editor'=>'Visual Books, 2007','pages'=>398,
          'quantity'=>5,'classification'=>'005.117 B727p'],

          ['id'=>172, 'shelf_id'=>3,'title'=>'Programação Shell Linux',
          'author'=>'NEVES, Julio Cezar','editor'=>'Brasport, 2010','pages'=>549,
          'quantity'=>5,'classification'=>'005.43 N511p'],

          ['id'=>173, 'shelf_id'=>3,'title'=>'Programando com C: simples & prático',
          'author'=>'COSTA, Eduard Montgomery Meira','editor'=>'Alta Books, c2006','pages'=>157,
          'quantity'=>8,'classification'=>'005.133 M787p'],

          ['id'=>174, 'shelf_id'=>3,'title'=>'Programming massively parallel processors: a hands-on approach',
          'author'=>'KIRK, David; HWU, Wen-mei','editor'=>'Morgan Kaufmann, c2010.xviii','pages'=>258,
          'quantity'=>2,'classification'=>'005.275 K59p'],

          ['id'=>175, 'shelf_id'=>3,'title'=>'Projeto de algoritmos: com implementações em Pascal e C',
          'author'=>'ZIVIANI, Nivio','editor'=>'São Paulo: Cengage Learning, c2004','pages'=>552,
          'quantity'=>1,'classification'=>'005.1 Z82pa'],

          ['id'=>176, 'shelf_id'=>3,'title'=>'Projeto de banco de dados com XML',
          'author'=>'GRAVES, Mark','editor'=>'Pearson Education, 2003. xv','pages'=>518,
          'quantity'=>3,'classification'=>'005.74 G776p'],

          ['id'=>177, 'shelf_id'=>3,'title'=>'Projeto de banco de dados: uma visão prática',
          'author'=>'MACHADO, Felipe Nery Rodrigues; ABREU, Maurício Pereira de','editor'=>'Érica, c1996','pages'=>298,
          'quantity'=>5,'classification'=>'005.74 M149p'],

          ['id'=>242, 'shelf_id'=>3,'title'=>'Projeto de Bancos de Dados',
          'author'=>'HEUSER, Carlos Alberto','editor'=>'Porto Alegre, Bookman, 2008','pages'=>282,
          'quantity'=>14,'classification'=>'005.74 H595p'],

          ['id'=>178, 'shelf_id'=>3,'title'=>'Projeto e modelagem de bancos de dados',
          'author'=>'TEOREY, Toby J.; LIGHTSTONE, Sam; NADEAU, Tom.','editor'=>'Rio de Janeiro, RJ: Elsevier: Campus, 2007 xvi','pages'=>276,
          'quantity'=>5,'classification'=>'005.756 T314p'],

          ['id'=>179, 'shelf_id'=>3,'title'=>'Projetos virtualmente impossíveis: guia completo do desenvolvedor de software para sobreviver aos projetos virtualmente impossíveis',
          'author'=>'YOURDON, Edward','editor'=>'São Paulo: Makron Books do Brasil, c1999','pages'=>202,
          'quantity'=>1,'classification'=>'005.1 Y81p'],

          ['id'=>180, 'shelf_id'=>3,'title'=>'Publisher 97',
          'author'=>'FRAGA, Simone','editor'=>'Visual Books, c1997','pages'=>168,
          'quantity'=>1,'classification'=>'006.68 F811p'],

          ['id'=>181, 'shelf_id'=>3,'title'=>'Python cookbook',
          'author'=>'BEAZLEY, David; JONES, Brian K','editor'=>'Novatec, 2013','pages'=>719,
          'quantity'=>3,'classification'=>'005.133 B386p'],

          ['id'=>182, 'shelf_id'=>3,'title'=>'Python e Django',
          'author'=>'SANTANA, Osvaldo; GALESI, Thiago','editor'=>'Novatec, 2010','pages'=>279,
          'quantity'=>5,'classification'=>'005.133 S232p'],

          ['id'=>183, 'shelf_id'=>3,'title'=>'Qualidade & teste de software',
          'author'=>'INTHURN, Cândida','editor'=>'Florianópolis: Visual Books, Bookstore, 2001','pages'=>108,
          'quantity'=>1,'classification'=>'005.1 I61q'],

          ['id'=>184, 'shelf_id'=>3,'title'=>'Qualidade de software: teoria e prática',
          'author'=>'ROCHA, Ana Regina Cavalcanti da; MALDONADO, José Carlos; WEBER, Kival Chaves (Org)','editor'=>'Prentice-Hall, 2004','pages'=>303,
          'quantity'=>1,'classification'=>'005.14 Q1qu'],

          ['id'=>185, 'shelf_id'=>3,'title'=>'Real-time systems: design principles for distributed embedded applications',
          'author'=>'KOPETZ, Hermann','editor'=>'Springer','pages'=>376,
          'quantity'=>2,'classification'=>'004.33 K83r'],

          ['id'=>186, 'shelf_id'=>3,'title'=>'Recursos básicos com StarOffice',
          'author'=>'CANTO, Cleunisse Rauen De Luca','editor'=>'Visual Books, 2000','pages'=>284,
          'quantity'=>1,'classification'=>'005.3 C232r'],

          ['id'=>187, 'shelf_id'=>3,'title'=>'Redes de computadores',
          'author'=>'TANENBAUM, Andrew S','editor'=>'Pearson, 2011. xvi','pages'=>582,
          'quantity'=>2,'classification'=>'004.6 T164r'],

          ['id'=>188, 'shelf_id'=>3,'title'=>'Redes de computadores',
          'author'=>'CARISSIMI, Alexandre da Silva; ROCHOL, Juergen; GRANVILLE, Lisandro Zambenedetti','editor'=>'Bookman,2009','pages'=>391,
          'quantity'=>5,'classification'=>'004.62 C277r'],

          ['id'=>189, 'shelf_id'=>3,'title'=>'Redes de computadores e a internet: uma abordagem top-down',
          'author'=>'KUROSE, James F.; ROSS, Keith W.','editor'=>'5. ed. São Paulo, SP: Pearson Addison-Wesley, 2010. xxiii','pages'=>614,
          'quantity'=>9,'classification'=>'004.6 K96re'],

          ['id'=>190, 'shelf_id'=>3,'title'=>'Redes de computadores e comunicação de dados',
          'author'=>'WHITE, Curt M','editor'=>'Cengage Learning, 2012. xvii','pages'=>406,
          'quantity'=>3,'classification'=>'004.6 W583r'],

          ['id'=>191, 'shelf_id'=>3,'title'=>'Redes industriais: aplicações em sistemas digitais de controle distribuído protocolos industriais, aplicações SCADA',
          'author'=>'ALBUQUERQUE, Pedro U. B. de','editor'=>'2. ed. São Paulo: Ensino Profissional, 2009','pages'=>258,
          'quantity'=>9,'classification'=>'004.62 A345r'],

          ['id'=>192, 'shelf_id'=>3,'title'=>'Redes neurais artificiais: teoria eaplicações',
          'author'=>'BRAGA, Antônio de Pádua; CARVALHO, André Carlos Ponce de Leon Ferreira; LUDERMIR, Teresa Bernarda','editor'=>'LTC, 2007','pages'=>226,
          'quantity'=>7,'classification'=>'006.32 B813r'],

          ['id'=>193, 'shelf_id'=>3,'title'=>'Redes neurais: princípios e prática',
          'author'=>'HAYKIN, Simon','editor'=>'Bookman, 2001','pages'=>900,
          'quantity'=>14,'classification'=>'006.3 H419r'],

          ['id'=>194, 'shelf_id'=>3,'title'=>'Redes sem fio: instalação, configuração e segurança: fundamentos',
          'author'=>'MORAES, Alexandre Fernandes de','editor'=>'Érica, c2010','pages'=>284,
          'quantity'=>5,'classification'=>'005.8 M827r'],

          ['id'=>195, 'shelf_id'=>3,'title'=>'Relatórios fáceis com XML & xHTML/CSS: construindo relatórios com padrões web de forma descomplicada',
          'author'=>'TISATTO, Rodrigo Maciel','editor'=>'Rio de Janeiro, RJ: Ciência Moderna, c2011. viii','pages'=>289,
          'quantity'=>5,'classification'=>'005.133 W334u'],

          ['id'=>196, 'shelf_id'=>3,'title'=>'SciLab: uma abordagem prática e didática',
          'author'=>'LEITE, Mário','editor'=>'Ciência Moderna, c2009. xxv','pages'=>601,
          'quantity'=>9,'classification'=>'005.10981 L533s'],

          ['id'=>197, 'shelf_id'=>3,'title'=>'Segurança em redes sem fio: aprenda a proteger suas informações em ambientes Wi-fi e Bluetooth',
          'author'=>'RUFINO, Nelson Murilo de O','editor'=>'Novatec, 2011','pages'=>237,
          'quantity'=>5,'classification'=>'005.8 R926s'],

          ['id'=>198, 'shelf_id'=>3,'title'=>'Servidores Linux: guia prático',
          'author'=>'MORIMOTO, Carlos E','editor'=>'Sul Editores, c2008','pages'=>735,
          'quantity'=>3,'classification'=>'005.43 M854s'],

          ['id'=>199, 'shelf_id'=>3,'title'=>'Sinais e sistemas',
          'author'=>'GIROD, Bernd; RABENSTEIN, Rudolf; STENGER, Alexander (Autor)','editor'=>'LTC, c2003. x','pages'=>340,
          'quantity'=>2,'classification'=>'003 G526s'],

          ['id'=>200, 'shelf_id'=>3,'title'=>'Sistema comercial integrado com Delphi 7: relatórios & ferramentas',
          'author'=>'OLIVIERO, Carlos A. J','editor'=>'São Paulo: Érica, 2005','pages'=>380,
          'quantity'=>5,'classification'=>'005.3 O49si'],

          ['id'=>203, 'shelf_id'=>3,'title'=>'Sistema de banco de dados',
          'author'=>'SILBERSCHATZ, Abraham; KORTH, Henry F.; SUDARSHAN, S.','editor'=>'6. ed. Rio de Janeiro, RJ: Elsevier, 2012','pages'=>861,
          'quantity'=>10,'classification'=>'005.74 S582s'],

          ['id'=>205, 'shelf_id'=>3,'title'=>'Sistemas de banco de dados',
          'author'=>'ELMASRI, Ramez; NAVATHE, Shamkant B','editor'=>'Pearson Addison-Wesley, c2011. xviii','pages'=>788,
          'quantity'=>5,'classification'=>'005.75 E48s'],

          ['id'=>206, 'shelf_id'=>3,'title'=>'Sistemas de redes para controle e automação',
          'author'=>'ALDABÓ, Ricardo','editor'=>'Book Express, c2000','pages'=>276,
          'quantity'=>1,'classification'=>'004.6 A357s'],

          ['id'=>207, 'shelf_id'=>3,'title'=>'Sistemas distribuídos: princípios e paradigmas',
          'author'=>'TANENBAUM, Andrew S.; STEEN, Maarten van.','editor'=>'2. ed. São Paulo, SP: Pearson Prentice Hall, 2007','pages'=>402,
          'quantity'=>6,'classification'=>'005.4476 T164s'],

          ['id'=>208, 'shelf_id'=>3,'title'=>'Sistemas operacionais',
          'author'=>'DEITEL, Harvey M.; DEITEL, Paul J.; CHOFFNES, David R.','editor'=>'3. ed. São Paulo: Pearson, c2005','pages'=>760,
          'quantity'=>3,'classification'=>'005.43 D325s'],

          ['id'=>209, 'shelf_id'=>3,'title'=>'Sistemas operacionais',
          'author'=>'OLIVEIRA, Rômulo Silva de; CARISSIMI, Alexandre da Silva; TOSCANI, Simão Sirineo','editor'=>'Bookman, 2010','pages'=>374,
          'quantity'=>5,'classification'=>'005.43 O48s'],

          ['id'=>210, 'shelf_id'=>3,'title'=>'Sistemas operacionais com Java',
          'author'=>'SILBERSCHATZ, Abraham; GALVIN, Peter Baer; GAGNE, Greg','editor'=>'Elsevier, 2008','pages'=>673,
          'quantity'=>3,'classification'=>'005.43 S582s'],

          ['id'=>211, 'shelf_id'=>3,'title'=>'Sistemas operacionais modernos',
          'author'=>'TANENBAUM, Andrew S','editor'=>'Pearson, c2008. xvi','pages'=>654,
          'quantity'=>7,'classification'=>'005.43 T164s'],

          ['id'=>212, 'shelf_id'=>3,'title'=>'SOA: princípios do design de serviço',
          'author'=>'ERL, Thomas','editor'=>'Pearson : Prentice Hall, c2008. x [ii]','pages'=>320,
          'quantity'=>3,'classification'=>'004.65 E69s'],

          ['id'=>213, 'shelf_id'=>3,'title'=>'Software livre: potencialidades e modelos de negócio',
          'author'=>'TAURION, Cezar','editor'=>'Rio de Janeiro, RJ: Brasport, 2004. xvi','pages'=>260,
          'quantity'=>2,'classification'=>'005.1 T227s'],

          ['id'=>214, 'shelf_id'=>3,'title'=>'Software: soluções para organizar seu negócio',
          'author'=>'LAMBERT, Mauro','editor'=>'Autêntica, c1998','pages'=>77,
          'quantity'=>1,'classification'=>'004 L222s'],

          ['id'=>215, 'shelf_id'=>3,'title'=>'Sourcebook of parallel computing',
          'author'=>'DONGARRA, J. J.','editor'=>'San Francisco, CA: Morgan Kaufmann Publishers, c2003. xvi','pages'=>842,
          'quantity'=>2,'classification'=>'004.35 S724'],

          ['id'=>216, 'shelf_id'=>3,'title'=>'Switch-mode power supplies',
          'author'=>'BASSO, Christophe P','editor'=>'McGraw-Hill Companies, 2008. xix','pages'=>889,
          'quantity'=>2,'classification'=>'005.133 B322s'],

          ['id'=>217, 'shelf_id'=>3,'title'=>'TCP/IP illustrated',
          'author'=>'FALL, Kevin R','editor'=>'Addison-Wesley, c2012','pages'=>0,
          'quantity'=>7,'classification'=>'004.62 F194t'],

          ['id'=>218, 'shelf_id'=>3,'title'=>'TCP/IP illustrated',
          'author'=>'STEVENS, W. Richard; WRIGHT, Gary R','editor'=>'Addison-Wesley, c1994','pages'=>0,
          'quantity'=>9,'classification'=>'004.62 S846t'],

          ['id'=>219, 'shelf_id'=>3,'title'=>'The art of multiprocessor programming',
          'author'=>'HERLIHY, Maurice; SHAVIT, Nir','editor'=>'Elsevier Science, 2008','pages'=>508,
          'quantity'=>2,'classification'=>'005.43 H549a'],

          ['id'=>220, 'shelf_id'=>3,'title'=>'Thinking in Java',
          'author'=>'ECKEL, Bruce','editor'=>'Prentice-Hall, 2007','pages'=>1482,
          'quantity'=>7,'classification'=>'005.133 E19t'],

          ['id'=>221, 'shelf_id'=>3,'title'=>'Treinamento prático em PHP 5',
          'author'=>'MORAZ, Eduardo','editor'=>'Digerati Books, 2005','pages'=>191,
          'quantity'=>1,'classification'=>'005.133 M832t'],

          ['id'=>222, 'shelf_id'=>3,'title'=>'UML 2: do requisito à solução',
          'author'=>'LIMA, Adilson da Silva','editor'=>'1. ed. São Paulo, SP: Érica, 2012','pages'=>368,
          'quantity'=>7,'classification'=>'005.369 L732u'],

          ['id'=>223, 'shelf_id'=>3,'title'=>'UML 2: guia prático',
          'author'=>'GUEDES, Gilleanes T. A.','editor'=>'São Paulo: Novatec, [2007]','pages'=>173,
          'quantity'=>5,'classification'=>'005.117 G924ug'],

          ['id'=>224, 'shelf_id'=>3,'title'=>'UML 2: uma abordagem prática',
          'author'=>'GUEDES, Gilleanes T. A.','editor'=>'2. ed. São Paulo, SP: Novatec, 2011','pages'=>484,
          'quantity'=>5,'classification'=>'005.117 G924um'],

          ['id'=>225, 'shelf_id'=>3,'title'=>'UML 2.3: do requisito à solução',
          'author'=>'LIMA, Adilson da Silva','editor'=>'São Paulo, SP: Érica, 2012','pages'=>368,
          'quantity'=>7,'classification'=>'005.369 L732u'],

          ['id'=>226, 'shelf_id'=>3,'title'=>'Use a cabeça! Análise e projeto orientado ao objeto',
          'author'=>'MCLAUGHLIN, Brett; POLLICE, Gary; WEST, David','editor'=>'Alta Books, c2007','pages'=>442,
          'quantity'=>2,'classification'=>'005.117 M478u'],

          ['id'=>227, 'shelf_id'=>3,'title'=>'Use a cabeça! Programação',
          'author'=>'BARRY, Paul; GRIFFITHS, David','editor'=>'Alta Books, 2010','pages'=>404,
          'quantity'=>16,'classification'=>'005.26 B281u'],

          ['id'=>228, 'shelf_id'=>3,'title'=>'Use a cabeça! SQL',
          'author'=>'BEIGHLEY, Lynn','editor'=>'Rio de Janeiro, RJ: Alta Books, 2008','pages'=>454,
          'quantity'=>5,'classification'=>'005.133 B422uc'],

          ['id'=>229, 'shelf_id'=>3,'title'=>'Use a cabeça! Análise de dados',
          'author'=>'MILTON, Michael','editor'=>'Alta Books, 2010','pages'=>440,
          'quantity'=>9,'classification'=>'005.757 M662u'],

          ['id'=>230, 'shelf_id'=>3,'title'=>'Use a cabeça! HTML com CSS e XHTML',
          'author'=>'FREEMAN, Elisabeth; FREEMAN, Eric','editor'=>'Alta Books, c2008','pages'=>580,
          'quantity'=>4,'classification'=>'005.133 F855u'],

          ['id'=>231, 'shelf_id'=>3,'title'=>'Use a cabeça! Java',
          'author'=>'SIERRA, Kathy; BATES, Bert','editor'=>'Alta Books, 2007','pages'=>470,
          'quantity'=>5,'classification'=>'005.133 S571u'],

          ['id'=>232, 'shelf_id'=>3,'title'=>'Use a cabeça! Servlets & JSP TM',
          'author'=>'BASHAM, Bryan; SIERRA, Kathy; BATES, Bert','editor'=>'2. ed. Rio de Janeiro, RJ: Alta Books, c2008. xxxii','pages'=>879,
          'quantity'=>5,'classification'=>'005.133 B299u'],

          ['id'=>233, 'shelf_id'=>3,'title'=>'Use a cabeça! Web design',
          'author'=>'WATRALL, Ethan; SIARTO, Jeff','editor'=>'Alta Books, 2009. xxxii','pages'=>472,
          'quantity'=>5,'classification'=>'005.133 W334u'],

          ['id'=>234, 'shelf_id'=>3,'title'=>'Use a cabeça! Ajax profissional',
          'author'=>'RIORDAN, Rebecca M','editor'=>'Alta Books, 2009','pages'=>497,
          'quantity'=>2,'classification'=>'005.133 R585u'],

          ['id'=>235, 'shelf_id'=>3,'title'=>'Utilizando UML e padrões: uma introdução à análise e ao projeto orientados a objetos e ao desenvolvimento iterativo',
          'author'=>'LARMAN, Craig','editor'=>'Bookman, 2007','pages'=>695,
          'quantity'=>3,'classification'=>'005.117 L324u'],

          ['id'=>236, 'shelf_id'=>3,'title'=>'VHDL: descrição e síntese de circuitos digitais',
          'author'=>'DAMORE, Roberto','editor'=>'LTC, 2005','pages'=>259,
          'quantity'=>6,'classification'=>'004.22 D164v'],

          ['id'=>237, 'shelf_id'=>3,'title'=>'Visual basic .NET: como programar',
          'author'=>'DEITEL, Harvey M.; DEITEL, Paul J.; NIETO, T. R.','editor'=>'São Paulo: Pearson Education do Brasil, c2004','pages'=>1088,
          'quantity'=>2,'classification'=>'005.133 D325v'],

          ['id'=>238, 'shelf_id'=>3,'title'=>'Web interativa com Ajax e PHP',
          'author'=>'NIEDERAUER, Juliano','editor'=>'Novatec, 2007','pages'=>287,
          'quantity'=>1,'classification'=>'005.2762 N666w'],

          ['id'=>239, 'shelf_id'=>3,'title'=>'Zend Framework: componentes poderosos do PHP',
          'author'=>'LISBOA, Flávio Gomes da Silva','editor'=>'Novatec, 2009','pages'=>352,
          'quantity'=>1,'classification'=>'005.12 L769c'],

        ];

        $table = $this->table('books');
        $table->insert($data)->save();
    }
}
