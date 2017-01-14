# System-for-the-support-in-the-management-of-a-University
Planeamento, especificação, modelização, implementação, teste e documentação  de um projeto de software que seja capaz de armazenar e gerir informação de uma Universidade || Planning, specification, modeling, implementation, testing and documentation of a software project that is capable of storing and managing information from a University


Objectivos do Projeto

Neste projeto pretende-se que desenvolvam um sistema capaz de automatizar a gestão de uma Universidade. Este deve permitir a existência de três perfis distintos: os alunos, o docentes e os administrativos. Todos estes perfis só poderão aceder aos serviços web com a utilização de um mecanismo de autenticação baseado em tokens, e terão ações distintas Por exemplo, os alunos poderão inscrever-se em cursos e respetivas unidades curriculares enquanto que os docentes poderão rever a lista de alunos inscritos, lançar notas, marca faltas, etc. O perfil administrativo irá permitir validar as inscrições dos alunos, fazer a atribuição das unidades curriculares aos respetivos docentes, imprimir pautas das notas definir as salas, etc. Estes serviços web irão permitirá melhorar e agilizar os serviços entre os três tipos de perfis existentes. Em concreto pretende-se:

i) Desenvolver um WS1 (Web Service) que permita aos estudantes: inscreverem-se em cursos, atualizar os seus dados, inscreverem-se em unidades curricular e obterem o seu horário, verificar a ocupação das salas, pesquisar se o docente se encontra disponível num determinado dia e período de tempo, consultar as sua notas. Deve elaborar uma interface na linguagem a sua escolha que permita
evocar os métodos implementados e submeter e obter a respectiva informação Este WS1 deve controlar o acesso aos dados e métodos.

ii) Desenvolver um WS2 (Web Service) que permita aos docentes: consultarem o seu horário, obter a lista de presença por unidade curricular num determinado horário, lançar notas numa unidade curricular, pesquisar salas livres, atualizar o seus dados. Como no primeiro serviço web deve implementar uma interface para os docentes que permita testar todas os métodos implementados enviando e
apresentando a informação.

iii) Desenvolver um WS3 (Web Serice) que permita aos administrativos validar a matrículas feitas pelos alunos, criar/inserir unidades curriculares, associa docentes a unidades curriculares, obter as listas de alunos inscritos, criar o horário para as unidades curriculares, definir salas para as unidades curriculares consultar a listas das notas de um determinado aluno, obter a lista de todas a salas livres num determinado período de tempo. A semelhança dos outro serviços web deve criar uma interface que permita testar todos os método implementados enviando e apresentando a respetiva informação.
