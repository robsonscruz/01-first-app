pipeline {
    agent any

    stages{
        stage('Clone') {
            steps {
                script {
                    checkout scm
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    sh 'cp index.html /var/www/html/index.html';
                    sh 'cp list.html /var/www/html/list.html';
                }
            }
        }

        stage('Reload server') {
            steps {
                script {
                    sh 'sudo /etc/init.d/apache2 reload'
                }
            }
        }
    }
}