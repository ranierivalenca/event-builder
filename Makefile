DB = $(shell php make-utils.php db database)
USER = $(shell php make-utils.php db username)
PW = $(shell php make-utils.php db password)
DUMP_FILE = dump.sql

all: help

bd-dump:
	@mysqldump -u $(USER) -p$(PW) $(DB) > $(DUMP_FILE)

bd-init:
	@mysql -u root -p -e "DROP DATABASE IF EXISTS $(DB); DROP USER IF EXISTS '$(USER)'@'localhost'; CREATE DATABASE $(DB); CREATE USER '$(USER)'@'localhost' IDENTIFIED BY '$(PW)'; GRANT ALL PRIVILEGES ON $(DB).* to '$(USER)'@'localhost';"

bd-set-dump: bd-init
	@mysql -u $(USER) -p$(PW) $(DB) < $(DUMP_FILE)

help:
	@echo "+---------------------------------------------------------------------------------+"
	@echo "| How to use the existent tasks                                                   |"
	@echo "+---------------------------------------------------------------------------------+"
	@echo "| bd-dump:      makes a dump of the current database                              |"
	@echo "| bd-init:     removes database and recreates it (with user) (needs bd root pw)  |"
	@echo "| bd-set-dump:  adds the dump file to the database (run bd-init)                 |"
	@echo "+---------------------------------------------------------------------------------+"
