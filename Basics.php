///////////////////////////////////////////////////////////////////////////////////        
Клонирование существующего репозитория
    $ git clone https://github.com/ofortnik/test
    
Клонирование существующего репозитория под другим именем
    $ git clone https://github.com/ofortnik/test GitCommands
    
Создание репозитория в существующей директории
    $ git init
    
Добавить файл под версионный контроль
    $ git add GitBasics.txt
    
Добавить файлы под версионный контроль
    $ git add -A
    
Зафиксировать изменения
    $ git commit -m 'Мои изменения'
    
Добавить файлы под версионный контроль и зафиксировать изменения (позволяя обойтись без git add)
    $ git commit -a -m 'Мои изменения'
    
Удалить файл
    rm file.php
    rm log/\*.log
    
Игнорировать файл
    git rm --cached file.php
///////////////////////////////////////////////////////////////////////////////////        
    
///////////////////////////////////////////////////////////////////////////////////
Определение состояния файлов
    $ git status
    
Определение состояния файлов упрощенный вариант
    $ git status -s
    $ git status --short
        ?? неотслеживаемые файлы
        A  добавленные в отслеживаемые
        M  отредактированные файлы
        
Определение состояния файлов (что именно изменилось)
    git diff
    
Сравнивает индексированные изменения с последним коммитом
    git diff --staged
    git diff --cached
///////////////////////////////////////////////////////////////////////////////////        
        
///////////////////////////////////////////////////////////////////////////////////        
Игнорирование файлов
    .gitignore
        #           комментарий
        /index.php  избежать рекурсии
        catalog/    для указания каталога
        !test.php   не игнорировать
        *           0 и более символов
        [a-zA-Z]
        [0-9]
        dir/**/*.txt 
///////////////////////////////////////////////////////////////////////////////////test line
