#!/bin/sh
mysql < sql/create-tables.sql
mysql < sql/sample-data.sql