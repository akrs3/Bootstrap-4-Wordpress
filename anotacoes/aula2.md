#Atualizar o gulp global

- npm install --global gulp-cli
- gulp --version

#Desinstalar o gulp 3 na pasta do projeto

- cd <caminhodapasta>/layout
- npm uninstall gulp --save-dev

#Instalar o gulp 4 na pasta do projeto

- npm install --save-dev gulp@next

ou 

- npm install gulp-cli -g

#Faz as modificaçoes no gulpfile:

- acrescentar gulp.series e gulp.parallel às tasks