# pj_senac
Projeto SENAC

# pj_senac_estoque
Projeto controle de materiais dos cursos técnicos do SENAC/DF

Estudos ::
	https://laravel.com/
	https://getcomposer.org/
	https://www.youtube.com/watch?v=iC-k0G5TPlQ&feature=youtu.be

Videos ::

	https://www.youtube.com/watch?v=IJtp8dAnCog&feature=youtu.be
	https://www.youtube.com/watch?v=pfB7hOY2u0s&feature=youtu.be

Projeto inicial para o controle de material utilizados nos cursos profissionalizantes do SENAC/DF. O Senac Taguatinga oferta muitos cursos em diversas áreas que necessitam de materiais para realizar sua execução. Exemplo: Curso: Pizzaiolo. O Senac Taguatinga deve gerenciar inúmeros cursos simultaneamente que necessitam de materiais e o docente responsável pela turma deve se programar de modo a não ultrapassar o limite do plano de curso. Outra dificuldade é manter registros e datas de quando cada docente solicitou um material e se ouve alguma intercorrência nessa solicitação. Proposta de Solução: Criar um sistema que seja capaz de cadastrar Plano de curso juntamente com seus materiais, vincular os docentes nas turmas. Sabe-se também que uma turma pode ter vários docentes, cada um em datas diferentes. As turmas cadastradas devem conter as quantidades de materiais já usados e avisar da quantidade de matérias restantes. O sistema deve alertar quando um material se esgotar para que o docente seja avisado para programar melhor suas aulas. Sabe-se também que cada material tem um tipo específico de medida, tais como: Litros, gramas, quantidade ect.

Linked repositories: pj_senac_estoque

:: COMANDOS INICIAIS PARA IMPLANTAÇÃO DO PROJETO ::

	git clone https://github.com/fernandoathaide/pj_senac_estoque.git
	composer install
	php artisan key:generate
	
	::Iniciar o serviço::
		php artisan serve
	
:: Running All Outstanding Migrations ::

	url - https://laravel.com/docs/4.2/migrations
	php artisan migrate
	
:: Instalando o tema ::
	https://github.com/jeroennoten/Laravel-AdminLTE
	
:: VISUAL ESTUDIO CODE ::
	https://code.visualstudio.com/download#
	
:: INSTALAÇÃO DE EXTENÇÕES VISUAL ESTÚDIO CÓD::
	https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-extension-pack
	
	composer require laravel/ui
	php artisan make:seeder 
	
