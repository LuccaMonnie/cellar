.mode columns
.headers on
.nullvalue NULL
PRAGMA foreign_keys = ON;

CREATE TABLE Customer (
  customerID      INTEGER PRIMARY KEY,
  firstName        TEXT,
  lastName    TEXT
);

CREATE TABLE Employee (
  employeeID      INTEGER PRIMARY KEY, --CHECK (employeeID is in the set of employee IDs),  -- check to see if employees student id matches with a running list of employees student ids we have on file
  firstName        TEXT,
  lastName    TEXT
);

CREATE TABLE Menu (
  itemID   INTEGER PRIMARY KEY,
  price   REAL  NOT NULL,
  itemName       TEXT NOT NULL,
  itemType  TEXT,
  size  TEXT
);

-- CREATE TABLE Toppings (
--   size  TEXT,
--   price REAL NOT NULL,
--   itemName  TEXT,
--   itemType  TEXT,
--   PRIMARY KEY (size, itemName)
-- );

CREATE TABLE OrderPlaced (
  orderID   INTEGER PRIMARY KEY,
  customerID INTEGER,
  timestamped DATETIME DEFAULT CURRENT_TIMESTAMP,
  status  TEXT CHECK ((status = 'Not started') or (status = 'Being made') or (status = 'In the oven') or (status ='Ready for pickup')),
  -- --quantity    INTEGER,
  -- day TEXT, --CHECK ((day = 'Sunday') or (day) = 'Monday') or (day = 'Tuesday') or (day = 'Wednesday') or (day = 'Thursday') or (day = 'Friday') or (day = 'Saturday')),
  -- timeOrderPlaced TEXT, --CHECK (timeOrderPlaced >= '07:00' and timeOrderPlaced <= '17:00'), --change this to show hours of operation Monday - Thursday 11:30am - midnight Friday 11:30am - 1am Saturday 4pm - 1am Sunday 4pm - midnight
  FOREIGN KEY (customerID) REFERENCES Customer(customerID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

-- CREATE TABLE Updates (
--   status   TEXT CHECK ((status = 'Not started') or (status = 'Being made') or (status = 'In the oven') or (status ='Ready for pickup')),
--   employeeID   INTEGER,
--   orderID   INTEGER,
--   PRIMARY KEY (orderID, employeeID),
--   FOREIGN KEY (employeeID) REFERENCES Employee(employeeID)
--     ON UPDATE CASCADE
--     ON DELETE CASCADE
--   FOREIGN KEY (orderID) REFERENCES OrderPlaced(orderID)
--     ON UPDATE CASCADE
--     ON DELETE CASCADE
-- );

  CREATE TABLE OrderedItem (
    itemID  INTEGER,
    orderID INTEGER,
      PRIMARY KEY (itemID, orderID),
      FOREIGN KEY (orderID) REFERENCES OrderPlaced(orderID)
        ON UPDATE CASCADE
        ON DELETE CASCADE
  );
