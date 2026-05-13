PROGRAM HelloDear(INPUT, OUTPUT);

USES
  DOS;

VAR
  QueryString, Name: STRING;

BEGIN
  QueryString := GetEnv('QUERY_STRING');
  Name := '';

  IF Pos('name=', QueryString) = 1 THEN
    Name := Copy(QueryString, 6, Length(QueryString) - 5);

  WRITELN('Content-Type: text/plain');
  WRITELN;

  IF Name <> '' THEN
    WRITELN('Hello dear, ', Name, '!')
  ELSE
    WRITELN('Hello Anonymous!');
END.
