create table assignment(
    id int(50) not null PRIMARY KEY AUTO_INCREMENT,
	  course text not null,
    name text not null,
    description text not null,
    deadline date not null
);

INSERT INTO assignment(course, name, description, deadline, atTime, submitted, personal, new)
VALUES('$course','$name','$description','$deadline', '$time', '$submitted', '$personal', '$new');

update assignment
set name='9. Project Implementation'
where id='1'

create table VUEvent(
    id int(50) not null PRIMARY KEY AUTO_INCREMENT,
	name text not null,
    eventDescription longtext not null,
    eventDate date not null,
    eventTime time not null,
    location text not null,
    studyAssociation text not null
);

insert into VUEvent(name, eventDescription, eventDate, eventTime, location, studyAssociation, attends, private) values('Bowling Night', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque quis mi sit amet posuere. Nunc massa enim, pharetra quis dapibus vitae, mollis ac arcu. Nam condimentum tellus at consectetur faucibus. In lacus dui, accumsan ac arcu eu, consequat ultrices ipsum. Donec efficitur a dui quis faucibus. Sed purus elit, iaculis ac sem eu, condimentum sollicitudin lectus. Suspendisse potenti. Mauris gravida sed arcu ac porta. Nulla finibus ligula id nisl volutpat, vitae imperdiet ex eleifend. Aliquam tempus mi est, pharetra elementum neque pretium ac. Aliquam semper, lacus eget gravida mollis, nibh ex gravida nisi', '2020-06-19', '1:00:00' , 'Leidseplein', 'STORM', '0', '0');
insert into VUEvent(name, eventDescription, eventDate, eventTime, location, studyAssociation, attends, private) values('oskar', 'Play Futsal', '2020-06-18', '10:00:00' , 'STORM', 'VU', '0', '1');
