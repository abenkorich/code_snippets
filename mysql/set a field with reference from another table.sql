update table_1 t1 
left JOIN table_2 t2 
on t1.reference_column = t2.reference_column 
set t1.column_to_be_update = t2.source_column

# using the like % pattern
update table1 t1 
left join table2 t2 
on t2.reference_column LIKE CONCAT('%', t1.reference_column ,'%')
set t1.column_to_be_update = t2.source_column
